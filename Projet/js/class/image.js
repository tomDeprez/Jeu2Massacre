class Image {

    constructor(src, nom) {
        this.src = src;
        this.nom = nom;
    }

    //Méthodes set
    setSrc(value) {
        this.src = value;
    }

    setNom(value) {
        this.nom = value;
    }

    //Méthodes get
    getSrc() {
        return this.src;
    }

    getNom() {
        return this.nom;
    }

}