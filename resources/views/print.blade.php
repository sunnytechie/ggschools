<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Print Result</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/gglogo400.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  
  </style>
</head>

<body>
<div class="container bootdey">
<div class="row invoice row-printable">
    <div class="col-md-12">
        <!-- col-lg-12 start here -->
        <div class="panel panel-default plain" id="dash_0">
            <!-- Start .panel -->
            <div class="panel-body p30">
                <div class="row">
                    <!-- Start .row -->
                    <div class="col-lg-6">
                        <!-- col-lg-6 start here -->
                        <div class="invoice-logo">
                          <a href="/">
                            <img width="100" src="{{ asset('assets/img/gglogo400.png') }}" alt="Invoice logo">
                          </a>
                        </div>
                    </div>
                    <!-- col-lg-6 end here -->
                    <div class="col-lg-6">
                        <!-- col-lg-6 start here -->
                        <div class="invoice-from">
                            <ul class="list-unstyled text-right">
                                <li>No.3 Obidike Street Opp. Golden Garden, Odume Layout Obosi</li>
                                <li>+234 806 884 7138</li>
                                <li>info@gurusandgeniusschools.org</li>
                                <li>Anambra State NGN</li>
                            </ul>
                        </div>
                    </div>
                    <!-- col-lg-6 end here -->
                    <div class="col-lg-12">
                        <!-- col-lg-12 start here -->
                        <div class="invoice-details mt25">
                            <div class="well">
                                <ul class="list-unstyled mb0">
                                    <li><strong>Name:</strong> {{ $detail->fullname }}</li>
                                    <li><strong>Registeration Number:</strong> {{ $detail->reg_no }}</li>
                                    <li><strong>Class:</strong> {{ $detail->student_class }}</li>
                                    <li><strong>Session:</strong> {{ $detail->academic_session }}</li>
                                    <li><strong>Term:</strong> {{ $detail->term }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="invoice-to mt25">
                            <ul class="list-unstyled">
                                <li><strong>Result Summary</strong></li>
                                <li><b>Positon:</b>  {{ $detail->position }}</li>
                                <li><b>Total Subject score:</b>  {{ $detail->tt_subject_score }}</li>
                                <li><b>Average score:</b>  {{ $detail->average_score }}</li>
                                <li><b>Comment:</b>  {{ $detail->comment }}</li>
                            </ul>
                        </div>
                        <div class="invoice-items">
                            <div class="table-responsive" style="overflow: auto; outline: none;" tabindex="0">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Subject</th>
                                            <th class="text-center">1<sup>st</sup> Exercise</th>
                                            <th class="text-center">1<sup>st</sup> Assignment</th>
                                            <th class="text-center">test</th>
                                            <th class="text-center">2<sup>nd</sup> Assignment</th>
                                            <th class="text-center">2<sup>nd</sup> exercise</th>
                                            <th class="text-center">test</th>
                                            <th class="text-center">Project</th>
                                            <th class="text-center">3<sup>rd</sup> Exercise</th>
                                            <th class="text-center">Exam</th>
                                            <th class="text-center">Total<br> Score</th>
                                            <th class="text-center">Position</th>
                                            <th class="text-center">Class Average</th>
                                            <th class="text-center">Grade</th>
                                            <th class="text-center">Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($results as $result)
                                        <tr>
                                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $result->subject }}</strong></td>
                                          <td>{{ $result->one_set_weekly_ex }}</td>
                                          <td>{{ $result->take_home_ass }}</td>
                                          <td>{{ $result->one_class_test }}</td>
                                          <td>{{ $result->two_take_home_ass }}</td>
                                          <td>{{ $result->two_set_weekly_ex }}</td>
                                          <td>{{ $result->two_class_test }}</td>
                                          <td>{{ $result->project }}</td>
                                          <td>{{ $result->three_set_weekly_ex }}</td>
                                          <td>{{ $result->exam_score }}</td>
                                          <td>{{ $result->tt_score }}</td>
                                          <td>{{ $result->position }}</td>
                                          <td>{{ $result->class_avrg }}</td>
                                          <td>{{ $result->grade }}</td>
                                          <td>{{ $result->remark }}</td>
                                        </tr>
                                    </tbody>
                                 @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="invoice-footer mt25">
                         <form action="{{ route('pdf') }}" method="POST">
                            @csrf
                                <input type="hidden" name="reg_no" value="{{ $detail->reg_no }}">
                                <input type="hidden" name="student_class" value="{{ $detail->student_class }}">
                                <input type="hidden" name="session" value="{{ $detail->academic_session }}">
                                <input type="hidden" name="term" value="{{ $detail->term }}"> 
                             <p class="text-center">Generated on {{ date('Y-m-d H:i:s') }} <button type="submit" class="btn btn-primary ml15"><i class="fa fa-print mr5"></i> Print Result</button></p>
                        </form>
                        </div>
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
                <!-- End .row -->
            </div>
        </div>
        <!-- End .panel -->
    </div>
    <!-- col-lg-12 end here -->
</div>
</div>

<style type="text/css">
body{
    margin-top:10px;
    background:#eee;    
}
</style>

<script type="text/javascript">

</script>
</body>
</html>
