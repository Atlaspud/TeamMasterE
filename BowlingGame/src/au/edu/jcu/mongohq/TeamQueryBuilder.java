package au.edu.jcu.mongohq;

import au.edu.jcu.model.Team;

public class TeamQueryBuilder {
	
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
		return "?apiKey=" + getApiKey();
	}
	
	public String docApiKeyUrl(String teamID)
	{
		return "/"+ teamID + "?apiKey=" + getApiKey();
	}
	
	/**
	 * Returns the Teams collection
	 * @return
	 */
	public String documentRequest()
	{
		return "team";
	}
	
	/**
	 * Builds a complete URL using the methods specified above
	 * @return
	 */
	public String buildTeamsSaveURL()
	{
		return getBaseUrl()+documentRequest()+docApiKeyUrl();
	}
	
	public String buildTeamsGetURL()
	{
		return getBaseUrl()+documentRequest()+docApiKeyUrl();
	}
	
	public String buildTeamsUpdateURL(String teamID)
	{
		return getBaseUrl()+documentRequest()+docApiKeyUrl(teamID);
	}
	
	public String createTeam(Team team)
	{
		return String.format("{\"team_id\" : \"%d\", \"team_name\" : \"%s\"}", 
				team.getTeamID(), team.getTeamName());
	}
	
	public String setTeam(Team team) {
		return String.format("{\"$set\" : "
				+ "{\"team_id\" : \"%d\", "
				+ "\"team_name\" : \"%s\"}}", 
				team.getTeamID(), team.getTeamName());
	}
}
