package au.edu.jcu.mongohq;

import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;

import android.os.AsyncTask;
import au.edu.jcu.model.Team;

final class UpdateTeamsAsyncTask extends AsyncTask<Object, Void, Boolean> {

	@Override
	protected Boolean doInBackground(Object... params) {
		Team team = (Team) params[0];
	
		try {

			TeamQueryBuilder qb = new TeamQueryBuilder();
			URL url = new URL(qb.buildTeamsUpdateURL(String.valueOf(team.getTeamID())));
			HttpURLConnection connection = (HttpURLConnection) url
					.openConnection();
			connection.setRequestMethod("PUT");
			connection.setDoOutput(true);
			connection.setRequestProperty("Content-Type",
					"application/json");
			connection.setRequestProperty("Accept", "application/json");
			
			OutputStreamWriter osw = new OutputStreamWriter(
					connection.getOutputStream());
			
			osw.write(qb.setTeam(team)); 
			osw.flush();
			osw.close();
			if(connection.getResponseCode() <205)
			{

				return true;
			}
			else
			{
				return false;
				
			}
			
		} catch (Exception e) {
			e.getMessage();
			return false;
			
		}

	}
	
}