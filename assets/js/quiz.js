function quiz_check(num){
    
    if(num == 1){
        let score = 0;
        var q1 = document.quiz.one.value;
        var q2 = document.quiz.two.value;
        var q3 = document.quiz.three.value;
        var q4 = document.quiz.four.value;
        var q5 = document.quiz.five.value;

        if (document.getElementById('mc1_3').checked) {
            score++;
        }
        if (document.getElementById('mc2_1').checked) {
            score++;
        }
        if (document.getElementById('mc3_4').checked) {
            score++;
        }
        if (document.getElementById('mc4_1').checked) {
            score++;
        }
        if (document.getElementById('mc5_1').checked) {
            score++;
        }
        
        if(score == 5){
            alert("5/5, Perfect score!!!");
        }
        else{
            alert( score + "/5, Try harder..." );
        }
    }
    
    else if(num == 2){
        let score = 0;
        var q1 = document.quiz.one.value;
        var q2 = document.quiz.two.value;
        var q3 = document.quiz.three.value;
        var q4 = document.quiz.four.value;
        var q5 = document.quiz.five.value;

        if (document.getElementById('mc1_1').checked) {
            score++;
        }
        if (document.getElementById('mc2_1').checked) {
            score++;
        }
        if (document.getElementById('mc3_1').checked) {
            score++;
        }
        if (document.getElementById('mc4_1').checked) {
            score++;
        }
        if (document.getElementById('mc5_1').checked) {
            score++;
        }
        
        if(score == 5){
            alert("5/5, Perfect score!!!");
        }
        else{
            alert( score + "/5, Try harder..." );
        }
    }
    
    else if(num == 3){
        let score = 0;
        var q1 = document.quiz.mc1.value;
        var q2 = document.quiz.mc2.value;
        var q3 = document.quiz.mc3.value;

        if ((document.getElementById('choice1_3').checked )&&(document.getElementById('choice1_6').checked)) {
            score++;
        }
        if((document.getElementById('choice2_1').checked)&&(document.getElementById('choice2_5').checked)&&(document.getElementById('choice2_6').checked)) {
            score++;
        }
        if ((document.getElementById('choice3_1').checked)&&(document.getElementById('choice3_6').checked)&&(document.getElementById('choice3_7').checked)&&(document.getElementById('choice3_12').checked)) {
            score++;
        
        }
        if(score == 3){
            alert("3/3, Perfect score!!!");
        }
        else{
            alert( score + "/3, Try harder..." );
        }
    }
    
}