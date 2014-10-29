package au.edu.jcu.model;

public class Match {
	
	private int team_id;
	private int match_id;
	
	public Match(int matchID, int teamID) {
		this.match_id = matchID;
		this.team_id = teamID;
	}
	
	public int getMatchID() {
		return this.match_id;
	}
	
	public int getTeamID() {
		return this.team_id;
	}

}
