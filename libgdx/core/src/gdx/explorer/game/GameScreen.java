package gdx.explorer.game;

import java.util.Iterator;

import com.badlogic.gdx.Gdx;
import com.badlogic.gdx.Input.Keys;
import com.badlogic.gdx.Screen;
import com.badlogic.gdx.audio.Music;
import com.badlogic.gdx.audio.Sound;
import com.badlogic.gdx.graphics.GL20;
import com.badlogic.gdx.graphics.OrthographicCamera;
import com.badlogic.gdx.graphics.Texture;
import com.badlogic.gdx.graphics.g2d.Sprite;
import com.badlogic.gdx.graphics.g2d.SpriteBatch;
import com.badlogic.gdx.math.MathUtils;
import com.badlogic.gdx.math.Rectangle;
import com.badlogic.gdx.math.Vector3;
import com.badlogic.gdx.utils.Array;
import com.badlogic.gdx.utils.TimeUtils;

public class GameScreen implements Screen {
    final GdxExplorerGame game;

    SpriteBatch batch;
    Vector3 touchPos;
    int dropsGathered;

    Texture img;
    final Texture gameBackgroundTexture;
    private Texture dropImage;
    private Texture bucketImage;
    private Sprite gameBackgroundSprite;
    private Sound dropSound;
    private Music rainMusic;
    private OrthographicCamera camera;
    private Rectangle bucket;
    private Array<Rectangle> raindrops;
    private long lastDropTime;

    // Hero positions
    private boolean up;
    private boolean down;
    private float position;

    public GameScreen(final GdxExplorerGame gam) {
        this.game = gam;

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

		// Add game background
		gameBackgroundTexture = new Texture(Gdx.files.internal("game_background.png"));
		gameBackgroundSprite = new Sprite(gameBackgroundTexture);

		// Set bucket dimensions
		bucket = new Rectangle();
		bucket.width = 64;
		bucket.height = 64;
		bucket.x = 800 / 2 - bucket.width / 2;
		bucket.y = 20;

		// Create rain drops
		raindrops = new Array<Rectangle>();
		spawnRaindrop();
    }

    @Override
    public void render(float delta) {

		// draw the bucket
		Gdx.gl.glClearColor(0, 0, 0.2f, 1);
		Gdx.gl.glClear(GL20.GL_COLOR_BUFFER_BIT);

		// tell the camera to update its matrices.
		camera.update();
        game.batch.setProjectionMatrix(camera.combined);

		// Draw background, drops and bucket here
        game.batch.begin();
		gameBackgroundSprite.draw(game.batch);
        game.font.draw(game.batch, "Drops Collected: " + dropsGathered, 0, 400);
        game.batch.draw(bucketImage, bucket.x, bucket.y);
		for(Rectangle raindrop: raindrops) {
            game.batch.draw(dropImage, raindrop.x, raindrop.y);
		}
        game.batch.end();

		// Making the Bucket Move (Mouse/Touch)
		if (Gdx.input.isTouched()) {
			Vector3 touchPos = new Vector3();
			touchPos.set(Gdx.input.getX(), Gdx.input.getY(), 0);
			camera.unproject(touchPos);
			bucket.x = touchPos.x - 64 / 2;
		}

		// Making the Bucket Move (Keyboard)
		if(Gdx.input.isKeyPressed(Keys.LEFT)) bucket.x -= 350 * Gdx.graphics.getDeltaTime();
		if(Gdx.input.isKeyPressed(Keys.RIGHT)) bucket.x += 350 * Gdx.graphics.getDeltaTime();

		// Make bucket move up
		heroJump();

		// We also need to make sure our bucket stays within the screen limits
		if(bucket.x < 0) bucket.x = 0;
		if(bucket.x > 800 - 64) bucket.x = 800 - 64;

		if(TimeUtils.nanoTime() - lastDropTime > 1000000000) spawnRaindrop();

		// We also need to make our raindrops move,
		// let's take the easy route and have them
		// move at a constant speed of 200 pixels/units per second.
		// If the raindrop is beneath the bottom edge of the screen,
		// we remove it from the array.
		Iterator<Rectangle> iter = raindrops.iterator();
		while(iter.hasNext()) {
			Rectangle raindrop = iter.next();
			raindrop.y -= 200 * Gdx.graphics.getDeltaTime();
			if(raindrop.y + 64 < 0) iter.remove();
			if(raindrop.overlaps(bucket)) {
                dropsGathered++;
				dropSound.play();
				iter.remove();
			}
		}
    }

    @Override
    public void dispose() {
        // Clear all the "native" resources
        dropImage.dispose();
        bucketImage.dispose();
        dropSound.dispose();
        rainMusic.dispose();
        batch.dispose();
    }

    @Override
    public void resize(int width, int height) {
    }

    @Override
    public void show() {
        rainMusic.play();
    }

    @Override
    public void hide() {
    }

    @Override
    public void pause() {
    }

    @Override
    public void resume() {
    }

    // Non lifecycle methods
    private void spawnRaindrop() {
        Rectangle raindrop = new Rectangle();
        raindrop.x = MathUtils.random(0, 800-64);
        raindrop.y = 480;
        raindrop.width = 64;
        raindrop.height = 64;
        raindrops.add(raindrop);
        lastDropTime = TimeUtils.nanoTime();
    }

    // Make bucket jump
    private void heroJump() {
        if(
                (
                        Gdx.input.isKeyPressed(Keys.SPACE) ||
                                Gdx.input.isKeyPressed(Keys.UP) ||
                                Gdx.input.justTouched()
                ) &&
                        !up && !down
                ) {
            up = true;
            position = bucket.y;
        }

        // If jump was triggered
        if(up) {
            bucket.y += 350 * Gdx.graphics.getDeltaTime();
            if (position + 200 <= bucket.y) {
                up = false;
                down = true;
            }
        } else if(down) {
            bucket.y -= 450 * Gdx.graphics.getDeltaTime();
            if (bucket.y <= 20) {
                position = bucket.y = 20f;
                up = down = false;
            }
        }
    }
}
