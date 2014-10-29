package au.edu.jcu.mongohq;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.entity.StringEntity;
import org.apache.http.impl.client.DefaultHttpClient;

import android.os.AsyncTask;
import au.edu.jcu.model.Team;

public class SaveTeamAsyncTask extends AsyncTask<Team, Void, Boolean> {

	@Override
	protected Boolean doInBackground(Team... param) {
		
		Team team = (Team) param[0];
		
		try {	
			TeamQueryBuilder qb = new TeamQueryBuilder();						
			
			HttpClient httpClient = new DefaultHttpClient();
	        HttpPost request = new HttpPost(qb.buildTeamsSaveURL());
	        
	        StringEntity params =new StringEntity(qb.createTeam(team));
	        request.addHeader("content-type", "application/json");
	        request.setEntity(params);
	        HttpResponse response = httpClient.execute(request);
	        
	        if(response.getStatusLine().getStatusCode()<205)
	        {
	        	return true;
	        }
	        else
	        {
	        	return false;
	        }
		} catch (Exception e) {
			return false;
		}		
	}

}
