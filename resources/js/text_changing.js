$(document).ready(function () {
    (function () {
        let words = [
            '34000 <br> և ավելի շրջանավարտ',
            '19  <br> լաբորատորիաներ,արվեստանոցներ',
            '81  <br> միջազգային համագործակցության <br> պայմանագրեր և հուշագրեր',
            '50  <br> և ավելի իրականացված նախագծեր'
        ]

        let point = 0;

        function changeText() {
            $('#words').html(words[point]);
            if (point < (words.length - 1)) {
                point++;
            } else {
                point = 0;
            }
        }

        setInterval(changeText, 700)
    }())
})
