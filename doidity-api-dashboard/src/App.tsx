// import { useState } from "react";
import "./App.css";

function App() {
  return (
    <>
      <div className="title">
        <h1>API Project Dashboard</h1>
        <p className="read-the-docs">
          Control site for Laser Doge, Run Bro Run, the Novel Editor, and other
          projects. Last Updated on 2/12.{" "}
        </p>
      </div>
      <div className="card">
        <div className="google-signin-btn">
          <img
            src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg"
            alt=""
            style={{ width: 18, height: 18 }}
          />
          Sign in with Google
        </div>
        <p>Authenticate your identity to manage projects</p>
      </div>
    </>
  );
}

export default App;
