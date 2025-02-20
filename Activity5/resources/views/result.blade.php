<!DOCTYPE html>
<html>
<head>
    <title>Math Operations</title>
    <style>
        /* Kulay ng kahon kung ang result ay even o odd*/
        .even-box { background-color: green; color: white; padding: 10px; display: inline-block; }
        .odd-box { background-color: blue; color: white; padding: 10px; display: inline-block; }

        /* Kulay ng text depende kung even (orange) o odd (blue) */
        .odd-text { color: blue; }
        .even-text { color: orange; }
    </style>
</head>
<body>
    <!-- pangalan at section -->
    <h2>Kenneth John E. Bermudez - 3C</h2>

    <!-- Iikot sa bawat item sa $results array -->
    @foreach ($results as $data)

        <!-- Ipinapakita ang Value 1 na may kulay depende kung even o odd -->
        <p>Value 1: <span class="{{ $data['val1'] % 2 == 0 ? 'even-text' : 'odd-text' }}">{{ $data['val1'] }}</span></p>

        <!-- Ipinapakita ang Value 2 na may kulay depende kung even o odd -->
        <p>Value 2: <span class="{{ $data['val2'] % 2 == 0 ? 'even-text' : 'odd-text' }}">{{ $data['val2'] }}</span></p>

        <!-- Ipinapakita ang operator na ginamit -->
        <p>Operator: {{ $data['operator'] }}</p>

        <!-- tinitignan kung numeric ang result -->
        @if(is_numeric($data['result']))
            <p>Result:</p>

            <!-- Ipinapakita ang result sa loob ng kahon na may kulay depende kung even o odd -->
            <div class="{{ $data['result'] % 2 == 0 ? 'even-box' : 'odd-box' }}">
                {{ $data['result'] }}
            </div>
        @else
            <!-- Kung hindi numero ang result (hal. error message), ipapakita ito sa kulay pula -->
            <p style="color: red;">{{ $data['result'] }}</p>
        @endif

        <hr> <!-- Separator line para sa bawat result -->
    @endforeach
</body>
</html>
