import React from "react";
// import logo from "./../../logo.svg";
import "./styles.css";
import Container from "@material-ui/core/Container";
// import Typography from "@material-ui/core/Typography";
import { Button, Paper } from "@material-ui/core";

import FullCalendar from "@fullcalendar/react"; // must go before plugins
import dayGridPlugin from "@fullcalendar/daygrid"; // a plugin!

function Home() {
  return (
    <Container maxWidth="sm" className="App">
      <Paper>
        <FullCalendar plugins={[dayGridPlugin]} initialView="dayGridMonth" />
        {/* <img src={logo} className="App-logo" alt="logo" />
        <Typography variant="h4" component="h1" gutterBottom>
          Create React App + Material-UI
        </Typography> */}
        <Button variant="contained" color="primary">
          Primary Button
        </Button>
        <Button variant="contained" color="secondary">
          Secondary Button
        </Button>
      </Paper>
    </Container>
  );
}
export default Home;
