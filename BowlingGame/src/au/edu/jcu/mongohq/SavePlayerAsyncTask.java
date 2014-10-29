package au.edu.jcu.mongohq;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.entity.StringEntity;
import org.apache.http.impl.client.DefaultHttpClient;

import android.os.AsyncTask;
import au.edu.jcu.model.Player;

public class SavePlayerAsyncTask extends AsyncTask<Player, Void, Boolean> {
	
		@Override
		protected Boolean doInBackground(Player... param) {
			
			Player player = (Player) param[0];
			
			try {	
				PlayerQueryBuilder qb = new PlayerQueryBuilder();						
				
				HttpClient httpClient = new DefaultHttpClient();
		        HttpPost request = new HttpPost(qb.buildPlayerSaveURL());
		        
		        StringEntity params =new StringEntity(qb.createPlayer(player));
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
