const startButton = document.getElementById('start-btn')
const nextButton = document.getElementById('next-btn')
const questionContainerElement = document.getElementById
('question-container')
const questionElement = document.getElementById('question')
const answerButtonsElement = document.getElementById('answer-buttons')

let shuffledQuestions, currentQuestionIndex 

startButton.addEventListener('click', startGame)
nextButton.addEventListener('click', () => {
    currentQuestionIndex++
    setNextQuestion()
})

function startGame() {
 startButton.classList.add('hide')
 shuffledQuestions = questions.sort(() => Math.random() - .5)
 currentQuestionIndex = 0
 questionContainerElement.classList.remove('hide')
 setNextQuestion()
}

function setNextQuestion() {
    resetState()
    showQuestion(shuffledQuestions[currentQuestionIndex])
}

function showQuestion(question) {
    questionElement.innerText = question.question
    question.answers.forEach(answer => {
        const button = document.createElement('button')
        button.innerText = answer.text
        button.classList.add('btn')
        if (answer.correct) {
            button.dataset.correct = answer.correct
        }
        button.addEventListener('click', selectAnswer)
        answerButtonsElement.appendChild(button)
    })
}


function resetState() {
    clearStatusClass(document.body)
    nextButton.classList.add('hide')
    while (answerButtonsElement.firstChild) {
        answerButtonsElement.removeChild
        (answerButtonsElement.firstChild)
    }
}

function selectAnswer(e) {
    const selectedButton = e.target
    const correct = selectedButton.dataset.correct
    setStatusClass(document.body, correct)
    Array.from(answerButtonsElement.children).forEach(button => {
        setStatusClass(button, button.dataset.correct)
    })
    nextButton.classList.remove('hide')
    if (shuffledQuestions.length > currentQuestionIndex + 1) {
        nextButton.classList.remove('hide')
    } else {
        startButton.innerText = 'Restart'
        startButton.classList.remove('hide')
    }
}

function setStatusClass(element, correct) {
    clearStatusClass(element)
    if (correct) {
        element.classList.add('correct')
    } else {
        element.classList.add('wrong')
    }
}

function clearStatusClass(element) {
    element.classList.remove('correct')
    element.classList.remove('wrong')
}

const questions = [
    {
        question: 'What is the capital of Denmark?',
        answers: [
            { text: '1.Copenhagen', correct: true },
            { text: '2.Stockholm', correct: false },
            { text: '3.Oslo', correct: false },
            { text: '4.Helsinki', correct: false }
            
        ]
    },

    {
        question: 'What is the capital of Switzerland?',
        answers: [
            
            { text: '1.Sofia', correct: false },
            { text: '2.Bern', correct: true },
            { text: '3.Tirrana', correct: false },
            { text: '4.Belgium', correct: false }
            
        ]
    },

    {
        question: 'What is the capital of Latvia',
        answers: [
            { text: '1.Riga', correct: true },
            { text: '2.Tallin', correct: false },
            { text: '3.Belgium', correct: false },
            { text: '4.Tirrana', correct: false }
            
        ]
    },

    {
        question: 'What is the capital of Norway',
        answers: [
            
            { text: '1.Tallin', correct: false },
            { text: '2.Stockholm', correct: false },
            { text: '3.Oslo', correct: true },
            { text: '4.Tirrana', correct: false }
            
        ]
    },

    {
        question: 'What is the capital of Portugal',
        answers: [
            { text: '1.Lisbon', correct: true },
            { text: '2.Tallin', correct: false },
            { text: '3.Rome', correct: false },
            { text: '4.Zagreb', correct: false }
            
        ]
    },

    {
        question: 'What is the capital of Croatia',
        answers: [
            
            { text: '1.Budapest', correct: false },
            { text: '2.Minsk', correct: false },
            { text: '3.Bucharest', correct: false },
            { text: '4.Zagreb', correct: true }
            
        ]
    },

    {
        question: 'What is the capital of Sweden',
        answers: [
            
            { text: '1.Budapest', correct: false },
            { text: '2.Stockholm', correct: true },
            { text: '3.Minsk', correct: false },
            { text: '4.Bucharest', correct: false }
            
        ]
    },


    {
        question: 'What is the capital of Ukraine',
        answers: [
            
            { text: '1.Budapest', correct: false },
            { text: '2.Kyiv', correct: true },
            { text: '3.Minsk', correct: false },
            { text: '4.Bucharest', correct: false }
            
        ]
    },
]
