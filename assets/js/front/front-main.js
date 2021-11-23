
import {CreateLogin} from "./CreateLogin.js";
import {ChartObj} from "./ChartObj.js";
import {ErrorView} from "./ErrorView.js";
import {Ajax} from "./Ajax.js";
import {Kcal} from "./Kcal";
import "../../css/globalStyle.css";

let chartJs = new ChartObj();
chartJs.chartView();
chartJs.viewChart();

let creatLogin = new CreateLogin();
creatLogin.init();

let error = new ErrorView();
error.init();

let ajax = new Ajax();
ajax.init();

let kcal = new Kcal();
kcal.init();