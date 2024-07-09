<?php

namespace Olharacessivel\ChartjsLaravel;

use Olharacessivel\ChartjsLaravel\Charts\ChartBar;
use Olharacessivel\ChartjsLaravel\Charts\ChartDoughnut;
use Olharacessivel\ChartjsLaravel\Charts\ChartLine;
use Olharacessivel\ChartjsLaravel\Charts\ChartPie;
use Olharacessivel\ChartjsLaravel\Charts\ChartPolar;
use Olharacessivel\ChartjsLaravel\Charts\ChartRadar;
use Olharacessivel\ChartjsLaravel\Charts\ChartScatter;

class ChartJS
{

    private array $labels = [];

    private array $dataset;

    private bool $comparative = false;


    public function bar()
    {
        if (!$this->isComparative())
        {
            $this->dataset = [$this->dataset];
        }

        $barChart = new ChartBar($this->labels, $this->dataset);
        $chartOptions = $barChart->getOptions();
        $chartSign = $barChart->sign();

        return view("chartjslaravel::canvas")->with("chartOptions", $chartOptions)->with("chartSign", $chartSign);

    }


    public function pie()
    {
        $barChart = new ChartPie($this->labels, [$this->dataset]);
        $chartOptions = $barChart->getOptions();
        $chartSign = $barChart->sign();

        return view("chartjslaravel::canvas")->with("chartOptions", $chartOptions)->with("chartSign", $chartSign);

    }


    public function line()
    {
        $barChart = new ChartLine($this->labels, [$this->dataset]);
        $chartOptions = $barChart->getOptions();
        $chartSign = $barChart->sign();

        return view("chartjslaravel::canvas")->with("chartOptions", $chartOptions)->with("chartSign", $chartSign);

    }


    public function scatter()
    {
        $barChart = new ChartScatter($this->labels, [$this->dataset]);
        $chartOptions = $barChart->getOptions();
        $chartSign = $barChart->sign();

        return view("chartjslaravel::canvas")->with("chartOptions", $chartOptions)->with("chartSign", $chartSign);

    }


    public function polar()
    {
        $barChart = new ChartPolar($this->labels, [$this->dataset]);
        $chartOptions = $barChart->getOptions();
        $chartSign = $barChart->sign();

        return view("chartjslaravel::canvas")->with("chartOptions", $chartOptions)->with("chartSign", $chartSign);

    }


    public function doughnut()
    {
        $barChart = new ChartDoughnut($this->labels, [$this->dataset]);
        $chartOptions = $barChart->getOptions();
        $chartSign = $barChart->sign();

        return view("chartjslaravel::canvas")->with("chartOptions", $chartOptions)->with("chartSign", $chartSign);

    }


    public function radar()
    {
        $barChart = new ChartRadar($this->labels, [$this->dataset]);
        $chartOptions = $barChart->getOptions();
        $chartSign = $barChart->sign();

        return view("chartjslaravel::canvas")->with("chartOptions", $chartOptions)->with("chartSign", $chartSign);

    }


    public function setLabels(array $labels)
    {
        $this->labels = $labels;

    }


    public function addLabel(string $label)
    {
        $this->labels[] = $label;

    }


    public function addData(mixed $data)
    {
        $this->dataset['data'][] = $data;

    }


    public function enableComparative(): void
    {
        $this->comparative = true;

    }


    public function disableComparative(): void
    {
        $this->comparative = false;

    }


    private function isComparative(): bool
    {
        return $this->comparative;

    }


    public function dataSet(string $label, array $dataset , $settings = [])
    {
        $this->dataset['label'] = $label;
        $this->dataset['data'] = $dataset;

        if ($this->isComparative()) {
            $this->dataset = $dataset;
        }

        $this->dataset = array_merge($this->dataset, $settings);

    }


}
