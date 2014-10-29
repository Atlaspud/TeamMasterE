package au.edu.jcu.bowlinggame;

import java.util.ArrayList;

import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentTransaction;
import android.view.LayoutInflater;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.TextView;
import au.edu.jcu.model.Player;
import au.edu.jcu.model.Team;
import au.edu.jcu.mongohq.GetPlayersAsyncTask;
import au.edu.jcu.mongohq.GetTeamsAsyncTask;

public class NewMatchScreenOneFragment extends Fragment implements OnClickListener {
	
	Button back;
	Button newTeam;
	ArrayList<Team> teams;
	ListView teamList;
	ArrayAdapter<String> teamsAdapter;
	
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		View rootView = inflater.inflate(R.layout.new_match_menu_fragment_one, container,
				false);
		
		back = (Button) rootView.findViewById(R.id.new_match_back_one_btn);
		back.setOnClickListener(this);
		newTeam = (Button) rootView.findViewById(R.id.new_match_new_team_one_btn);
		newTeam.setOnClickListener(this);
		teamList = (ListView) rootView.findViewById(R.id.teams_one_list_view);
		
		teamsAdapter = new ArrayAdapter<String>(getActivity(), R.layout.custom_list_view_layout);
		teamList.setAdapter(teamsAdapter);
		
		teamList.setOnItemClickListener(new OnItemClickListener() {
			@Override
	        public void onItemClick(AdapterView<?> parent, View view, int position,long id) {
				
				String selected = (((TextView)view).getText().toString());
				MainActivity.team_one = getSelectedTeam(selected);
				FragmentTransaction transaction = getFragmentManager().beginTransaction();
				transaction.setCustomAnimations(R.anim.left_to_right, R.anim.right_to_left);
				transaction.replace(R.id.container, new NewMatchScreenTwoFragment());
				transaction.commit();
	        }
	    });
		
		updateTeamList();
		
		return rootView;
	}

	@Override
	public void onClick(View v) {
		
		Button btn = (Button) v;
		String btnLabel = btn.getText().toString();
		FragmentTransaction transaction = getFragmentManager().beginTransaction();
		
		if (btnLabel.contains("Back")) {
			transaction.setCustomAnimations(R.anim.r_left_to_right, R.anim.r_right_to_left);
			transaction.replace(R.id.container, new MainMenuFragment());
		} else if (btnLabel.contains("New Team")) {
			MainActivity.newMatchScreen = 1;
			transaction.setCustomAnimations(R.anim.abc_slide_in_top, R.anim.abc_slide_out_bottom);
			transaction.replace(R.id.container, new NewTeamFragment());
		}
		
		transaction.commit();
	};
	
	private void getTeamList() {
		GetTeamsAsyncTask teamTsk = new GetTeamsAsyncTask();
		GetPlayersAsyncTask playerTsk = new GetPlayersAsyncTask();
		ArrayList<Player> teamPlayers;
		try{
			teams = teamTsk.execute().get();
			teamPlayers = playerTsk.execute().get();
			for (Team t : teams) {
				for (Player p : teamPlayers) {
					if(t.getTeamID() == p.getTeamID()) {
						t.addPlayer(p);
					}
				}
			}
		} catch (Exception e) {
			
		}
	}
	
	private void updateTeamList() {
		teamsAdapter.clear();
		getTeamList();
		for (Team temp : teams) {
			teamsAdapter.add(temp.getTeamName());
		}
	}
	
	private Team getSelectedTeam(String teamName) {
		for (Team selectedTeam : teams) {
			if (selectedTeam.getTeamName().contentEquals(teamName)) {
				return selectedTeam;
			}
		}
		return null;
	}
}