import User from './User.jsx'
import ToggleBtn from './ToggleBtn.jsx'
import ShowInput from './ShowInput.jsx'
import Calc from './Calc.jsx'

function App() {

  return (
    <>
      <User name="Alice" age={25} />
      <ToggleBtn />
      <ShowInput />
      <Calc />
    </>
  )
}

export default App
