<style>
    .blank-state {
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        -moz-box-shadow: 0 3px 4px -3px rgba(102, 102, 102, 0.25);
        -webkit-box-shadow: 0 3px 4px -3px rgba(102, 102, 102, 0.25);
        box-shadow: 0 3px 4px -3px rgba(102, 102, 102, 0.25);
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 40px 20px;
        font-size: 100%;
        color: #737373;
        text-align: center;
        border: 1px solid #ddd;
        background-color: #fefefe;
    }

    .blank-state h1,
    .blank-state p {
        font-weight: 300;
    }

    .blank-state p {
        margin-bottom: 15px;
    }

    .blank-state.blank-state-lg {
        padding: 90px 45px;
        font-size: 150%;
    }

    .blank-state.blank-state-sm {
        width: 60%;
        margin-left: auto;
        margin-right: auto;
        padding: 20px 10px;
        font-size: 85%;
    }
</style>

<div class='container'>
    <div class='blank-state blank-state-lg'>
        <i class='mega-octicon octicon-organization'></i>
        <h2>Belum Ada Data Area</h2>
        <a href="{{ route('area.create') }}" class='btn btn-outline-primary'>Tambah Area</a>
    </div>
</div>
