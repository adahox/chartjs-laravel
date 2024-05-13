<?php

namespace Olharacessivel\ChartjsLaravel\Options\Enums;

enum ChartsOptionsTypes : string
{
    case BAR = "bar";
    case LINE = "line";
    case AREA = "area";
    case BUBBLE = "bubble";
    case PIE = "pie";
    case DOUGHNUT = 'doughnut';
    case POLAR = "polarArea";
    case RADAR = "radar";
    case SCATTER = "scatter";

}
