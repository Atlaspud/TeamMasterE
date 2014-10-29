package au.edu.jcu.model;

import java.io.Serializable;
import java.util.ArrayList;

public class Team implements Serializable {
	
	private static final long serialVersionUID = 1L;
	
	private int team_id;
	private String team_name;
	private ArrayList<Player> teamPlayers = new ArrayList<Player>();
	
	public Team() {
		
	}
	
	public Team(String teamName, int teamID) {
		this.team_name = teamName;
		this.team_id = teamID;
	}
	
	public void setTeamName(String teamName) {
		this.team_name = teamName;
	}
	
	public String getTeamName() {
		return this.team_name;
	}
	
	public void setTeamID(int teamID) {
		this.team_id = teamID;
	}
	
	public int getTeamID() {
		return this.team_id;
	}
	
	public void addPlayer(Player player) {
		this.teamPlayers.add(player);
	}
	
	public ArrayList<Player> getPlayers() {
		return this.teamPlayers;
	}

}
