export default class Module {
  constructor() {
    this.init();
    this.scrollers;
    this.bounds;
    this.lerp;
    this.clamp;
    this.invlerp;
  }

  init() {
    this.bounds = [];
    this.scrollers = document.querySelectorAll('[data-scroller]');
    for( var i = 0; i < this.scrollers.length; i++ ){
      this.bounds.push({
        top: this.scrollers[i].getBoundingClientRect().top,
        bottom: this.scrollers[i].getBoundingClientRect().bottom,
      });
    }
    console.log( 'init bounds:' );
    console.log( this.bounds );
    this.initResize();
    requestAnimationFrame(()=>this.raf());
  }

  debounce( func, timeout = 400 ){
    let timer;
    return (...args) => {
      clearTimeout(timer);
      timer = setTimeout(() => { func.apply( this, args); }, timeout)
    }
  }

  initResize(){
    window.addEventListener('resize',()=>{
      for( var i = 0; i < this.scrollers.length; i++ ){
        this.bounds[i].top = this.scrollers[i].getBoundingClientRect().top;
        this.bounds[i].bottom = this.scrollers[i].getBoundingClientRect().bottom;
      }
    });
    
  }

  raf(){
    const y = window.scrollY;
    for( var i = 0; i < this.bounds.length; i++ ){
      if( this.bounds[i].top <= ( y + 100 )&& this.bounds[i].bottom >= ( y - 100 ) ){
        this.scrollers[i].style.setProperty('--scroll', this.invlerp( this.bounds[i].top, this.bounds[i].bottom, y ) );
      }
    }
    requestAnimationFrame(()=>this.raf());
  }

  lerp(x,y,a){
    return x * ( 1 - a ) + y * a;
  }

  clamp( a, min = 0, max = 1 ){
    return Math.min(max, Math.max(min,a));
  }

  invlerp(x,y,a){
    return this.clamp((a - x)/(y - x));
  }
}
