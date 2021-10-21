<x-app-layout>
    <x-slot name="header">Quiz Güncelle</x-slot>
    
    
    <div class="card">
        <div class="card-body">
            <form action="{{route('quizzes.update',$quiz->id)}}" >
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Quiz Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{$quiz->title}}">
                </div>
<br>
                <div class="form-group">
                    <label>Quiz Açıklama</label>
                    <textarea name="description"  class="form-control" rows="4" >{{$quiz->description}}</textarea>
                </div>
<br>
                <div class="form-group">
                <input  id="isFinished" @if($quiz->finished_at) checked @endif type="checkbox">
                    <label>Bitiş tarihi olacak mı ?</label>
                </div>
<br>
                <div  class="form-group"  id="finishedInput" @if(!$quiz->finished_at) style="display: none;" @endif >
                    <label>Bitiş Tarihi</label>
                    <input type="datetime-local" name="finished_at" class="form-control" @if($quiz->finished_at) value="{{ date('Y-m-d\TH:i', strtotime($quiz->finished_at)) }}" @endif >
                </div>
<br>
                <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm btn-block">Quiz Güncelle</button>
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