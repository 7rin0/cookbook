package gdx.explorer.game.desktop;

import com.badlogic.gdx.backends.lwjgl.LwjglApplication;
import com.badlogic.gdx.backends.lwjgl.LwjglApplicationConfiguration;
import gdx.explorer.game.GdxExplorerGame;

public class DesktopLauncher {
	public static void main (String[] arg) {
		LwjglApplicationConfiguration config = new LwjglApplicationConfiguration();
		config.title = "GDX Game";
		config.width = 800;
		config.height = 480;
		new LwjglApplication(new GdxExplorerGame(), config);
	}
}
