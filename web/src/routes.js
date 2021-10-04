import React from "react";
import { Route, BrowserRouter } from "react-router-dom";

import Home from "./Pages/Home";
import ExaminingBoard from "./Pages/ExaminingBoard";

const Routes = () => {
  return (
    <BrowserRouter>
      <Route component={Home} path="/" exact />
      <Route component={ExaminingBoard} path="/banca/criar" />
    </BrowserRouter>
  );
};

export default Routes;
