import React from 'react';
import './Footer.css';

function Footer({ year }) {
  return (
    <footer className="footer">
      <p>&copy; Copyright {year} All rights reserved</p>
    </footer>
  );
}

export default Footer;
