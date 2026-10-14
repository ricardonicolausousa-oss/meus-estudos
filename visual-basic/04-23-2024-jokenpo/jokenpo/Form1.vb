Public Class Form1
    Dim vitorias, derrotas, empates, n, suajogada, jogadainimiga As Integer
    Private Sub btn_jogar_Click(sender As Object, e As EventArgs) Handles btn_jogar.Click
        n = Int(Rnd() * 3) + 1

    End Sub

    Private Sub cmb_suajogada_SelectedIndexChanged(sender As Object, e As EventArgs) Handles cmb_suajogada.SelectedIndexChanged
        If cmb_suajogada.SelectedItem = "Pedra" Then
            img_suajogada.Image
            suajogada = 1

        End If
    End Sub
End Class
