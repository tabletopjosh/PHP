import React from 'react';
import Header from './components/Header';
import Footer from './components/Footer';
import MainContent from './components/MainContent';
import './App.css'; // Import the CSS file for styling

function App() {
  const websiteTitle = "Josh's Website";

  return (
    <div className="app">
      <Header title={websiteTitle} />
      <MainContent />
      <Footer year={new Date().getFullYear()} />
    </div>
  );
}

export default App;
