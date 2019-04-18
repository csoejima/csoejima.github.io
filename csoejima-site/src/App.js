import React, { Component } from 'react';
import ReactFullpage from '@fullpage/react-fullpage';

import './App.scss';

class App extends Component {
  render() {
    return (
      // <div className="App">
      //   reee
      // </div>
      <ReactFullpage
        render={({ state, fullpageApi }) => {
          return (
            <ReactFullpage.Wrapper>
              <div className="section">
                <p>Section 1 (welcome to fullpage.js)</p>
                <button onClick={() => fullpageApi.moveSectionDown()}>
                  Click me to move down
                </button>
              </div>
              <div className="section">
                <p>Section 2</p>
              </div>
            </ReactFullpage.Wrapper>
          );
        }}
      />
    );
  }
}

export default App;
