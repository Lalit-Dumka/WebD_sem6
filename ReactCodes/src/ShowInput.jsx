import {React, useState} from 'react'

function ShowInput() {
    const [input, setInput] = useState('')
    function handleClick() {
        setInput(document.getElementById('inp1').value)
    }

    return (
        <div>
            <input id="inp1" />
            <button onClick={handleClick}>Show Input</button>
            <p>{input}</p>
        </div>
    )
}

export default ShowInput