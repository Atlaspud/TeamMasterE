package au.edu.jcu.bowlinggame;

import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentTransaction;
import android.view.LayoutInflater;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.ViewGroup;
import android.widget.Button;

public class ViewStatsMenuFragment extends Fragment implements OnClickListener {
	
	Button teamBtn;
	Button weekBtn;
	
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		View rootView = inflater.inflate(R.layout.view_stats_dialog_box, container,
				false);
		
		teamBtn = (Button) rootView.findViewById(R.id.teamStatsDialogBtn);
		teamBtn.setOnClickListener(this);
		weekBtn = (Button) rootView.findViewById(R.id.weeklyStatsDialogBtn);
		weekBtn.setOnClickListener(this);
		
		return rootView;
	}

	@Override
	public void onClick(View v) {
		
		Button btn = (Button) v;
		String btnLabel = btn.getText().toString();
		FragmentTransaction transaction = getFragmentManager().beginTransaction();
		
		if (btnLabel.contains("Team")) {
			System.out.println("Team");
		} else if (btnLabel.contains("Week")) {
			transaction.remove(this);
		}
		
		transaction.commit();
		
	};

}
