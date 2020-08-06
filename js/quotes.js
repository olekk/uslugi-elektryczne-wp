const quotes = ['Projektowanie i montaż instalacji elektrycznych',
             '<br>Instalacje średniego napięcia do 20KV',
              'Wykonywanie pomiarów kompensacji mocy',
              '<br>Zabudowa baterii kondensatorów',
              'Instalacje odgromowe',
              '<br>Montaż instalacji niskoprądowych',
              'Instalacja Domofonów',
              '<br>Telewizja przemysłowa',
              'Instalacje alarmowe',
              '<br>Monitoring budynków',
              'Wykonanie instalacji oddymiania',
              '<br>Instalacje komputerowe',
              'Dokonanie pomiarów elektrycznych',
              '<br>Wykonanie pomiarów natężenia oświetlenia',
              'Montaż systemów fotowoltanicznych'];

let n=0;
const quotesEl = document.getElementById("quotes");
quotesEl.style.transition = "all 1s ease";
addEventListener('load', ()=>{nextQuote(); setInterval(nextQuote, 5000)}, false);

function nextQuote() {
    if(n>=15)n=0;
    quotesEl.style.opacity = "0";
    quotesEl.style.marginLeft = "0";
    setTimeout(()=>{
        quotesEl.style.marginLeft = "20px";
        quotesEl.style.opacity = "1";
        quotesEl.innerHTML = quotes[n++];
    }, 1000);
    
}


