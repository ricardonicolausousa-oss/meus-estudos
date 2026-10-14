Public Class soma_de_valores
    Dim n1, n2, res As Integer

    Private Sub btn_limpar_Click(sender As Object, e As EventArgs) Handles btn_limpar.Click
        txt_n1.Clear()
        txt_n2.Clear()
        lbl_res.Text = ""
        txt_n1.Focus()
    End Sub

    Private Sub btn_somar_Click(sender As Object, e As EventArgs) Handles btn_somar.Click
        n1 = txt_n1.Text
        n2 = txt_n2.Text
        res = (n1 + n2)
        lbl_res.Text = res
    End Sub
End Class
