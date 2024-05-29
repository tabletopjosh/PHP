import React, { useState } from 'react';
import './MainContent.css';

function MainContent() {
  const [counter, setCounter] = useState(0);

  const incrementCounter = () => {
    setCounter(counter + 1);
  };

  return (
    <main className="main-content">
      <p>Welcome to the website. Here is some content.</p>
      <img src={require('../assets/sample-image.jpg')} alt="Sample" className="sample-image" />
      <div className="counter-section">
        <p>Counter: {counter}</p>
        <button onClick={incrementCounter}>Increment</button>
      </div>
    </main>
  );
}

export default MainContent;


