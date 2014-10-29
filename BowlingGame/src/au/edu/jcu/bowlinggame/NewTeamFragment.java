package au.edu.jcu.bowlinggame;

import java.util.ArrayList;

import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentTransaction;
import android.view.LayoutInflater;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import au.edu.jcu.model.Player;
import au.edu.jcu.model.Team;
import au.edu.jcu.mongohq.GetPlayersAsyncTask;
import au.edu.jcu.mongohq.GetTeamsAsyncTask;
import au.edu.jcu.mongohq.SavePlayerAsyncTask;
import au.edu.jcu.mongohq.SaveTeamAsyncTask;

public class NewTeamFragment extends Fragment implements OnClickListener {
	
	int team_id;
	int player_id;
	Button back;
	Button done;
	EditText teamName;
	EditText playerNameOne;
	EditText playerNameTwo;
	EditText playerNameThree;
	EditText playerNameFour;
	
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		View rootView = inflater.inflate(R.layout.new_team_fragment, container,
				false);
		
		back = (Button) rootView.findViewById(R.id.new_team_back_btn);
		back.setOnClickListener(this);
		done = (Button) rootView.findViewById(R.id.new_team_done_btn);
		done.setOnClickListener(this);
		
		teamName = (EditText) rootView.findViewById(R.id.newTeamTxt);
		playerNameOne = (EditText) rootView.findViewById(R.id.playerNameOneTxt);
		playerNameTwo = (EditText) rootView.findViewById(R.id.playerNameTwoTxt);
		playerNameThree = (EditText) rootView.findViewById(R.id.playerNameThreeTxt);
		playerNameFour = (EditText) rootView.findViewById(R.id.playerNameFourTxt);
		
		return rootView;
	}

	@Override
	public void onClick(View v) {
		
		Button btn = (Button) v;
		String btnLabel = btn.getText().toString();
		FragmentTransaction transaction = getFragmentManager().beginTransaction();
		
		if (btnLabel.contains("Back")) {
			transaction.setCustomAnimations(R.anim.abc_slide_in_bottom, R.anim.abc_slide_out_top);
			if (MainActivity.newMatchScreen == 1) {
				transaction.replace(R.id.container, new NewMatchScreenOneFragment());
			} else {
				transaction.replace(R.id.container, new NewMatchScreenTwoFragment());
			}
		} else if (btnLabel.contains("Done")) {
			setTeamID();
			setPlayerID();
			saveTeamName(teamName.getText().toString());
			savePlayerName(playerNameOne.getText().toString());
			savePlayerName(playerNameTwo.getText().toString());
			savePlayerName(playerNameThree.getText().toString());
			savePlayerName(playerNameFour.getText().toString());
			transaction.setCustomAnimations(R.anim.abc_slide_in_bottom, R.anim.abc_slide_out_top);
			if (MainActivity.newMatchScreen == 1) {
				transaction.replace(R.id.container, new NewMatchScreenOneFragment());
			} else {
				transaction.replace(R.id.container, new NewMatchScreenTwoFragment());
			}
			
		}
		
		transaction.commit();
	};
	
	public void saveTeamName(String teamName) {
		
		SaveTeamAsyncTask saveTeam = new SaveTeamAsyncTask();
		saveTeam.execute(new Team(teamName, team_id));
	}
	
	public void savePlayerName(String playerName) {
			
		SavePlayerAsyncTask savePlayer = new SavePlayerAsyncTask();
		savePlayer.execute(new Player(playerName, player_id, team_id));
		player_id++;
	}
	
	public void setPlayerID() {
		GetPlayersAsyncTask getPlayer = new GetPlayersAsyncTask();
		try{
			ArrayList<Player> player = getPlayer.execute().get();
			player_id = player.size() + 1;
		} catch (Exception e) {
		
		}
	}
	
	public void setTeamID() {
		GetTeamsAsyncTask getTeams = new GetTeamsAsyncTask();
		try{
			ArrayList<Team> player = getTeams.execute().get();
			team_id = player.size() + 1;
		} catch (Exception e) {
		
		}
	}
}
