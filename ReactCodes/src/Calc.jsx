import React, { useState } from 'react';

function Calc() {
  const [display, setDisplay] = useState('');
  const [result, setResult] = useState('');

  function handleClick(e){
    const val = e.target.value; // Properly declare the variable val
    console.log(val);

    if (val === '=') {
      try {
        setResult(eval(display).toString());
      } catch {
        setResult('Error');
      }
    } else if (val === 'C') {
      setDisplay('');
      setResult('');
    } else {
      setDisplay(display + val);
    }
  };

  return (
    <div>
      <div className="calculator">
        <div className="display">
          {display}
        </div>
        <div className="result">
          {result}
        </div>
        <div className="buttons"> {/* Corrected the typo from dib to div */}
          {
            [7, 8, 9, '+', 4, 5, 6, '-', 1, 2, 3, '*', 'C', 0, '=', '/'].map((val) => {
              return <button key={val} onClick={handleClick} value={val}>{val}</button>;
            })
          }
        </div>
      </div>
    </div>
  );
}

export default Calc;
