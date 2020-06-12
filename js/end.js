const username = document.querySelector('#username');
const saveButton = document.querySelector('#savescore');
const finalScore = document.querySelector('#finalScore');
const mostRecentScore = localStorage.getItem('mostRecentScore');
finalScore.innerText = mostRecentScore;
const highScores = JSON.parse(localStorage.getItem("highScores")) || [];
const MAX_HIGH_SCORES = 5;

username.addEventListener('keyup', () => {
    saveButton.disabled = !username.value;
});

saveHighScore = e => {
    console.log("clicked the save button!");
    e.preventDefault();
    
    const score = {
        // score: mostRecentScore,
        score: Math.floor(Math.random()*100),
        name: username.value
    };
    highScores.push(score);

    highScores.sort( (a,b) => {
        return b.score - a.score;
    });
    highScores.splice(5);

    localStorage.setItem('highScores', JSON.stringify(highScores));
    window.location.assign('index.html');
};



saveButton.addEventListener('click', event => {
  saveHighScore(event);
});