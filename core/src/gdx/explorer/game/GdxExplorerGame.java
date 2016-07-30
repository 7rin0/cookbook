package gdx.explorer.game;

import com.badlogic.gdx.ApplicationAdapter;
import com.badlogic.gdx.Gdx;
import com.badlogic.gdx.graphics.GL20;
import com.badlogic.gdx.audio.Music;
import com.badlogic.gdx.audio.Sound;
import com.badlogic.gdx.graphics.OrthographicCamera;
import com.badlogic.gdx.graphics.Texture;
import com.badlogic.gdx.graphics.g2d.SpriteBatch;
import com.badlogic.gdx.math.Rectangle;
import com.badlogic.gdx.math.Vector3;

public class GdxExplorerGame extends ApplicationAdapter {
	Texture img;
	private Texture dropImage;
	private Texture bucketImage;
	private Sound dropSound;
	private Music rainMusic;
	private OrthographicCamera camera;
	private SpriteBatch batch;
	private Rectangle bucket;
	
	@Override
	public void create () {
		batch = new SpriteBatch();
		img = new Texture("badlogic.jpg");
		// load images for bucket and droplet
		dropImage = new Texture(Gdx.files.internal("droplet.png"));
		bucketImage = new Texture(Gdx.files.internal("bucket.png"));

		// load sounds
		dropSound = Gdx.audio.newSound(Gdx.files.internal("drop.wav"));
		rainMusic = Gdx.audio.newMusic(Gdx.files.internal("rain.mp3"));

		// start music
		rainMusic.setLooping(true);
		rainMusic.play();

		// create camera
		// true as first parameter will set the
		// y-axis to point downwards.
		camera = new OrthographicCamera();
		camera.setToOrtho(false, 800, 400);

		// create batch
		batch = new SpriteBatch();

		// Set bucket dimensions
		bucket = new Rectangle();
		bucket.width = 64;
		bucket.height = 64;
		bucket.x = 800 / 2 - bucket.width / 2;
		bucket.y = 20;
	}

	@Override
	public void render () {
		// draw the bucket
		Gdx.gl.glClearColor(0, 0, 0.2f, 1);
		Gdx.gl.glClear(GL20.GL_COLOR_BUFFER_BIT);
		batch.setProjectionMatrix(camera.combined);
		batch.begin();
		batch.draw(bucketImage, bucket.x, bucket.y);
		batch.end();

		// Making the Bucket Move (Mouse/Touch)
		if (Gdx.input.isTouched()) {
			Vector3 touchPos = new Vector3();
			touchPos.set(Gdx.input.getX(), Gdx.input.getY(), 0);
			camera.unproject(touchPos);
			bucket.x = touchPos.x - 64 / 2;
		}
	}
	
	@Override
	public void dispose () {
		batch.dispose();
		img.dispose();
	}
}
