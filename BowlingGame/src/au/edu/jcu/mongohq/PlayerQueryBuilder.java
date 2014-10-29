package au.edu.jcu.mongohq;

import au.edu.jcu.model.Player;

public class PlayerQueryBuilder {
	
	/**
	 * Specify your database name here
	 * @return
	 */
	public String getDatabaseName() {
		return "androidconnect";
	}

	/**
	 * Specify your MongoLab API here
	 * @return
	 */
	public String getApiKey() {
		return "HsVuu-XP4lXdFVFE-1pXFqJJK9BiUmW9";
	}
	
	/**
	 * This constructs the URL that allows you to manage your database, 
	 * collections and documents
	 * @return
	 */
	public String getBaseUrl()
	{
		return "https://api.mongolab.com/api/1/databases/"+getDatabaseName()+"/collections/";
	}
	
	/**
	 * Completes the formating of your URL and adds your API key at the end
	 * @return
	 */
	public String docApiKeyUrl()
	{
		return "?apiKey="+getApiKey();
	}
	
	public String docApiKeyUrl(String playerID)
	{
		return "/"+ playerID+"?apiKey="+getApiKey();
	}
	
	/**
	 * Returns the Teams collection
	 * @return
	 */
	public String documentRequest()
	{
		return "player";
	}
	
	/**
	 * Builds a complete URL using the methods specified above
	 * @return
	 */
	public String buildPlayerSaveURL()
	{
		return getBaseUrl()+documentRequest()+docApiKeyUrl();
	}
	
	public String buildPlayerGetURL()
	{
		return getBaseUrl()+documentRequest()+docApiKeyUrl();
	}
	
	public String buildPlayerUpdateURL(String teamID)
	{
		return getBaseUrl()+documentRequest()+docApiKeyUrl(teamID);
	}
	
	public String createPlayer(Player player)
	{
		return String.format("{\"player_id\" : \"%d\", "
				+ "\"player_name\" : \"%s\", "
				+ "\"team_id\" : \"%d\"}", 
				player.getPlayerID(), player.getPlayerName(), player.getTeamID());
	}
	
	public String setPlayer(Player player) {
		return String.format("{\"$set\" : "
				+ "{\"player_id\" : \"%d\", "
				+ "\"player_name\" : \"%s\", "
				+ "\"team_id\" : \"%d\"}}", 
				player.getPlayerID(), player.getPlayerName(), player.getTeamID());
	}
	
	

}
