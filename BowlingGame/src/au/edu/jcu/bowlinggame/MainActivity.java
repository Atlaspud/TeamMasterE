package au.edu.jcu.bowlinggame;

import android.os.Bundle;
import android.support.v7.app.ActionBarActivity;
import au.edu.jcu.model.Team;

public class MainActivity extends ActionBarActivity {
	
	protected static MainMenuFragment mainMenuFragment = new MainMenuFragment();
	protected static int newMatchScreen = 1;
	protected static Team team_one;
	protected static Team team_two;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        if (savedInstanceState == null) {
            getSupportFragmentManager().beginTransaction()
                    .add(R.id.container, new MainMenuFragment())
                    .commit();
        }
    }
}
