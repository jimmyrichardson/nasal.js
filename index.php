<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Nasal.js</title>
    <link rel="stylesheet" href="/dev/main.css" />
  </head>
  <body>
    <section class="scroller scroller--hero" data-scroller>
      <div class="scroller__content scroller__content--hero">
        <h1 class="scroller__content__heading scroller__content__heading--hero">NASAL</h1>
        <br /><br />
        <h2 class="scroller__content__subhead">Not Another Scroll Animation Library</h2>
        <br />
        <p>NASAL.js is a scroll animation library dedicated to separating concerns strictly to the CSS layer.</p>
      </div>
      <div class="scroller--hero__measure" data-scroller>
        <figure class="shape shape--square"></figure>
        <figure class="shape shape--circle"></figure>
        <figure class="shape shape--triangle"></figure>
      </div>
    </section>
    <section class="scroller scroller--how" data-scroller>
      <div class="scroller__content scroller__content--how scroller__content--flex">
        <div class="scroller__content--how__text">
          <h2>How does NASAL work?</h2>
          <br />
          <p>Nasal is very simple at its core. It's a basic linear interpolation engine that grabs the scroll position of your desired elements and sends the output to the <span>--scroll</span> CSS variable. CSS can take it from there!</p>
          <p>Nasal is very simple at its core. It's a basic linear interpolation engine that grabs the scroll position of your desired elements and sends the output to the <span>--scroll</span> CSS variable. CSS can take it from there!</p>
          <div class="shape shape--circle"></div>
          <p>Nasal is very simple at its core. It's a basic linear interpolation engine that grabs the scroll position of your desired elements and sends the output to the <span>--scroll</span> CSS variable. CSS can take it from there!</p>
          <p>Nasal is very simple at its core. It's a basic linear interpolation engine that grabs the scroll position of your desired elements and sends the output to the <span>--scroll</span> CSS variable. CSS can take it from there!</p>
        </div>
        <pre>&lt;div<br />   class="circle"<br />   style="--scroll: 0.<div class="display-scroll"><div class="display-scroll__inner">
          <span>0</span>
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>5</span>
          <span>6</span>
          <span>7</span>
          <span>8</span>
          <span>9</span>
        </div></div><div class="display-scroll"><div class="display-scroll__inner">
        <span>0</span>
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>5</span>
          <span>6</span>
          <span>7</span>
          <span>8</span>
          <span>9</span>
          <span>0</span>
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>5</span>
          <span>6</span>
          <span>7</span>
          <span>8</span>
          <span>9</span>
        </div></div><div class="display-scroll"><div class="display-scroll__inner">
        <span>0</span>
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>5</span>
          <span>6</span>
          <span>7</span>
          <span>8</span>
          <span>9</span>
          <span>0</span>
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>5</span>
          <span>6</span>
          <span>7</span>
          <span>8</span>
          <span>9</span>
          <span>0</span>
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>5</span>
          <span>6</span>
          <span>7</span>
          <span>8</span>
          <span>9</span>
          <span>0</span>
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>5</span>
          <span>6</span>
          <span>7</span>
          <span>8</span>
          <span>9</span>
        </div></div>"&gt;<br />&lt;/div&gt;<br/><br />&lt;style&gt;<br />   .circle {<br />      transform:<br />         translate3d( calc( var(--scroll) * 50vw ), 0px, 0px ) );<br />   }<br />&lt;/style&gt;</pre>
      </div>
    </section>
    <section class="scroller" data-scroller>
      <div class="scroller__content">
        <h2>Three</h2>
        <div class="scroller__animate scroller__animate--triangle"></div>
      </div>
    </section>
    <section class="scroller" data-scroller>
      <div class="scroller__content">
        <h2>Four</h2>
        <div class="scroller__animate scroller__animate--square"></div>
      </div>
    </section>
    <section class="scroller" data-scroller>
      <div class="scroller__content">
        <h2>Five</h2>
        <div class="scroller__animate scroller__animate--circle"></div>
      </div>
    </section>
    <section class="scroller" data-scroller>
      <div class="scroller__content">
        <h2>Six</h2>
        <div class="scroller__animate scroller__animate--triangle"></div>
      </div>
    </section>
    <script src="/dev/main.js"></script>
  </body>
</html>