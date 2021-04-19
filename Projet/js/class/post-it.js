class Postit {

    element;
    text;
    x;
    y;

    constructor(element, text, x, y) {
        this.element = element;
        this.text = text;
        this.x = x;
        this.y = y;
    }

    getElement() {
        return this.element;
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