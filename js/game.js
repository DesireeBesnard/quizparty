const question = document.querySelector('#question');
const proposals = Array.from(document.querySelectorAll('.proposals'));
const progressText = document.querySelector('#progressText');
const scoreHud = document.querySelector('#score');
const progressBarFull = document.querySelector('#progressBarFull');

let currentQuestion = {};
let acceptingAnswers = false;
let score = 0;
let questionCounter = 0;
let availableQuestions = [];

let questions = [];
fetch("js/questions.json")
  .then ( response => {
    return response.json();
  }).then ( loadedQuestions => {
    questions = loadedQuestions;
    startGame();
  }).catch( err => {
    console.error(err);
  });

  
//CONSTANTS

const CORRECT_BONUS = 10;
const MAX_QUESTIONS = 20;

startGame = () => {
    questionCounter = 0;
    score = 0;
    availableQuestions = [...questions];
    getNewQuestion();
}

getNewQuestion = () =>{
    if(availableQuestions.length === 0  || questionCounter >= MAX_QUESTIONS){
      localStorage.setItem('mostRecentScore', score);
      return window.location.assign('end.html');
    }
    questionCounter++;
    progressText.innerText = `Question ${questionCounter}/${MAX_QUESTIONS}`;
    // on remets à jour la barre de progression
    progressBarFull.style.width = (questionCounter / MAX_QUESTIONS) * 100 + '%';

    const questionIndex = Math.floor(Math.random() * availableQuestions.length);
    currentQuestion = availableQuestions [questionIndex];
    question.innerText = currentQuestion.question

    proposals.forEach( proposal => {
        const number = proposal.dataset['number'];
        proposal.innerText = currentQuestion['proposal' + number]
    });

    //retire la question qui vient d'être posée
    availableQuestions.splice(questionIndex, 1);

    acceptingAnswers = true;
};

proposals.forEach(proposal => {
    proposal.addEventListener('click', e => {
        if (!acceptingAnswers) return;

        acceptingAnswers = false;
        const selectedProposal = e.target;
        const selectedAnswer = selectedProposal.dataset['number'];

      let classToApply = 'incorrect';
      if (selectedAnswer == currentQuestion.answer) {
        classToApply = 'correct';
      }

      if (classToApply === 'correct'){
        incrementScore(CORRECT_BONUS);
      }

      selectedProposal.parentElement.classList.add(classToApply);
      setTimeout( () => {
        selectedProposal.parentElement.classList.remove(classToApply);
        getNewQuestion();
      }, 1000);
      
    });
});

const incrementScore = num => {
  score += num;
  scoreHud.innerText = score;
  console.log(score);
}

