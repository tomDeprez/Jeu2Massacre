//Document objet pour notre partie

class Partie {

    ArrayPostit = [];

    constructor(nom, score) {
        this.date = new Date();
        this.nom = nom;
        this.score = score;
    }

    //Méthode set
    setNom(value) {
        this.nom = value;
    }

    setScore(value) {
        this.score = value;
    }

    setDate() {
        let milli = Date.now;
        this.date = new Date("milli");
    }

    //Méthode get
    getNom() {
        return this.nom;
    }

    getScore() {
        return this.score;
    }

    getDate() {
        return this.date;
    }

    AddPostIt(postIt) {
        this.ArrayPostit.push(postIt);
    }

    getPostites() {
        return this.ArrayPostit;
    }

    updatePostite(postIt, pos){
        this.ArrayPostit[pos] = postIt;
    }

    AfficherPartie() {
        var partie = new Partie(this.nom, this.score);
        var retour = JSON.stringify(partie);
        console.log(this);
    }


}
