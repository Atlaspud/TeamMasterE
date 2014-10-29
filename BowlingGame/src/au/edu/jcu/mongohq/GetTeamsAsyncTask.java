package au.edu.jcu.mongohq;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;

import android.os.AsyncTask;
import au.edu.jcu.model.Team;

import com.mongodb.BasicDBList;
import com.mongodb.BasicDBObject;
import com.mongodb.DBObject;

public class GetTeamsAsyncTask extends AsyncTask<Team, Void, ArrayList<Team>> {
	static BasicDBObject user = null;
	static String OriginalObject = "";
	static String server_output = null;
	static String temp_output = null;

	@Override
	protected ArrayList<Team> doInBackground(Team... arg0) {
		
		ArrayList<Team> myTeams = new ArrayList<Team>();
		try 
		{			
			
			TeamQueryBuilder qb = new TeamQueryBuilder();						
	        URL url = new URL(qb.buildTeamsGetURL());
	        HttpURLConnection conn = (HttpURLConnection) url
					.openConnection();
	        conn.setRequestMethod("GET");
			conn.setRequestProperty("Accept", "application/json");

			if (conn.getResponseCode() != 200) {
				throw new RuntimeException("Failed : HTTP error code : "
						+ conn.getResponseCode());
			}

			BufferedReader br = new BufferedReader(new InputStreamReader(
					(conn.getInputStream())));

			while ((temp_output = br.readLine()) != null) {
				server_output = temp_output;
			}
			
            // create a basic db list
			String mongoarray = "{ artificial_basicdb_list: "+server_output+"}";
			Object o = com.mongodb.util.JSON.parse(mongoarray);
			

			DBObject dbObj = (DBObject) o;
			BasicDBList teams = (BasicDBList) dbObj.get("artificial_basicdb_list");
			
		  for (Object obj : teams) {
			DBObject userObj = (DBObject) obj; 
			
			Team temp = new Team();
			temp.setTeamID(Integer.parseInt(userObj.get("team_id").toString()));
			temp.setTeamName(userObj.get("team_name").toString());
			myTeams.add(temp);
			
			}
		
		}catch (Exception e) {
			e.getMessage();
		}
		
		return myTeams; 
	}
}
