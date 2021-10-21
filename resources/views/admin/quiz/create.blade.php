<x-app-layout>
    <x-slot name="header">Quiz Oluştur</x-slot>
    
    
    <div class="card">
        <div class="card-body">
            <form action="{{route('quizzes.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Quiz Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>
<br>
                <div class="form-group">
                    <label>Quiz Açıklama</label>
                    <textarea type="text" name="description" class="form-control" rows="4" value="{{ old('description') }}"></textarea>
                </div>
<br>
                <div class="form-group">
                <input  id="isFinished" @if(old('finished_at')) checked @endif type="checkbox">
                    <label>Bitiş tarihi olacak mı ?</label>
                </div>
<br>
                <div  class="form-group"  id="finishedInput" @if(!old('finished_at')) style="display: none;" @endif >
                    <label>Bitiş Tarihi</label>
                    <input type="datetime-local" name="finished_at" class="form-control" value="{{ old('finished_at') }}" >
                </div>
<br>
                <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm btn-block">Quiz Oluştur</button>
                </div>
            </form>

            <x-slot name="js">
                <script>
                    $('#isFinished').change(function(){
                        if ($('#isFinished').is(':checked')) {
                            $('#finishedInput').show();
                        }else{
                            $('#finishedInput').hide();
                        }
                    })
                </script>

            </x-slot>

</div>
</div>
</x-app-layout>