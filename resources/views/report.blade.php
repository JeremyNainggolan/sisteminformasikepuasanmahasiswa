@extends('layouts/user-app')
@section('title', 'Survey Kepuasan Mahasiswa')
@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg rounded-3 overflow-hidden">
                    <div class="card-header text-center bg-primary text-white">
                        <h4 class="font-weight-bolder">Survey Kepuasan Mahasiswa</h4>
                        <p class="mb-0">Silakan beri komentar, saran, dan rating kepuasan Anda</p>
                    </div>
                    <div class="card-body bg-light">
                        <form id="surveyForm">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="example@student.ac.id" required>
                            </div>

                            <div class="form-group">
                                <label for="comments">Comments and Suggestions</label>
                                <textarea class="form-control" id="comments" rows="4" placeholder="write your comments and suggestions here...." required></textarea>
                            </div>

                            <!-- Selection for specific areas -->
                            <div class="form-group mt-4">
                                <label>Pilih kategori yang ingin Anda nilai</label>
                                <select class="form-control" id="area" required>
                                    <option value="">Kategori</option>
                                    <option value="keasramaan">Keasramaan</option>
                                    <option value="kemahasiswaan">Kemahasiswaan</option>
                                    <option value="kantin">Kantin</option>
                                </select>
                            </div>

                            <h5 class="font-weight-bolder mt-4">Rating</h5>

                            <!-- Rating with 5 yellow stars -->
                            <div class="form-group">
                                <label>Bagaimana tingkat kepuasan Anda secara keseluruhan?</label>
                                <div class="rating d-flex justify-content-around">
                                    <input type="radio" name="rating" id="star1" value="1" required>
                                    <label for="star1"><i class="fas fa-star"></i></label>

                                    <input type="radio" name="rating" id="star2" value="2">
                                    <label for="star2"><i class="fas fa-star"></i></label>

                                    <input type="radio" name="rating" id="star3" value="3">
                                    <label for="star3"><i class="fas fa-star"></i></label>

                                    <input type="radio" name="rating" id="star4" value="4">
                                    <label for="star4"><i class="fas fa-star"></i></label>

                                    <input type="radio" name="rating" id="star5" value="5">
                                    <label for="star5"><i class="fas fa-star"></i></label>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary mt-4">Kirim Survey</button>
                            </div>
                        </form>

                        <div id="surveyResult" class="mt-4" style="display:none;">
                            <h5 class="font-weight-bolder text-primary">Hasil Survey</h5>
                            <div class="result-item"><strong>Email:</strong> <span id="resultEmail"></span></div>
                            <div class="result-item"><strong>Komentar dan Saran:</strong> <span id="resultComments"></span></div>
                            <div class="result-item"><strong>Rating:</strong> <span id="resultRating"></span></div>
                            <div class="result-item"><strong>Area yang Dinilai:</strong> <span id="resultArea"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
<style>
    body {
        background-color: #5b7d88;
    }
    .card {
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(169, 145, 197, 0.2);
        transition: transform 0.2s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .rating label {
        font-size: 30px;
        color: #137ee2;
        cursor: pointer;
        transition: transform 0.2s;
    }
    .rating input[type="radio"] {
        display: none;
    }
    input[type="radio"]:checked + label {
        transform: scale(1.2);
    }
    .btn-primary {
        background-color: #8bb8d1;
        border: none;
        border-radius: 20px;
    }
    #surveyResult {
        background-color: #abddf5;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(176, 195, 214, 0.1);
        margin-top: 20px;
    }
    .result-item {
        padding: 5px 0;
    }
</style>
@endsection

@section('scripts')
<script>
    document.getElementById('surveyForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        // Retrieve form data
        const email = document.getElementById('email').value;
        const comments = document.getElementById('comments').value;
        const rating = document.querySelector('input[name="rating"]:checked')?.value || 'Tidak ada rating';
        const area = document.getElementById('area').value || 'Tidak ada area';

        // Display survey results
        document.getElementById('resultEmail').innerText = email;
        document.getElementById('resultComments').innerText = comments || 'Tidak ada komentar dan saran';
        document.getElementById('resultArea').innerText = area;
        document.getElementById('resultRating').innerText = rating;
        
        document.getElementById('surveyResult').style.display = 'block'; // Show survey results
    });
</script>
@endsection
