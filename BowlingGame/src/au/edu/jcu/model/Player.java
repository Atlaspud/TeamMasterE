package au.edu.jcu.model;

import java.io.Serializable;

public class Player implements Serializable {
	
	private static final long serialVersionUID = 1L;
	private String player_name;
	private int player_id;
	private int team_id;
	
	public Player() {
		
	}
	
	public Player(String playerName, int playerID, int teamID) {
		this.player_name = playerName;
		this.player_id = playerID;
		this.team_id = teamID;
	}
	
	public void setPlayerName(String playerName) {
		this.player_name = playerName;
	}
	
	public String getPlayerName() {
		return this.player_name;
	}
	
	public void setPlayerID(int playerID) {
		this.player_id = playerID;
	}
	
	public int getPlayerID() {
		return player_id;
	}
	
	public void setTeamID(int teamID) {
		this.team_id = teamID;
	}
	
	public int getTeamID() {
		return this.team_id;
	}

}
