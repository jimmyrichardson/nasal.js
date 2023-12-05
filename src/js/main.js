import Module from "./lib/module";

class Main {
  constructor() {
    this.init();
  }

  init() {
    new Module();
  }
}

window.main = new Main();
