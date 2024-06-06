<form action="{{ route('rekomendasiopds.update', $rekomendasiopds->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="id_kajian">ID Kajian:</label>
    <input type="text" name="id_kajian" value="{{ $rekomendasiopds->id_kajian }}" required>

    <label for="opd_id">OPD ID:</label>
    <input type="text" name="opd_id" value="{{ $rekomendasiopds->opd_id }}" required>

    <label for="rekomendasi">Rekomendasi:</label>
    <input type="text" name="rekomendasi" value="{{ $rekomendasiopds->rekomendasi }}" required>

    <label for="tindak_lanjut">Tindak Lanjut:</label>
    <input type="text" name="tindak_lanjut" value="{{ $rekomendasiopds->tindak_lanjut }}" required>

    <label for="status">Status:</label>
    <select id="status" name="status" required>
        <option value="1">True</option>
        <option value="0">False</option>
    </select>

    <label for="readed">Readed:</label>
    <select id="readed" name="readed" required>
        <option value="1">True</option>
        <option value="0">False</option>
    </select>

    <button type="submit">Update Admin</button>
</form>