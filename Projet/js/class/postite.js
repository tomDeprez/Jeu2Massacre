class Postite {


    text;
    x;
    y;

    constructor(text, x, y) {
        this.text = text;
        this.x = x;
        this.y = y;
    }

    //Méthodes set
    setText(text) {
        this.text = text;
    }

    setX(x) {
        this.x = x;
    }

    setY(y) {
        this.y = y;
    }

    //Méthodes get
    getText() {
        return this.text;
    }

    getX() {
        return this.x;
    }

    getY() {
        return this.y;
    }
}