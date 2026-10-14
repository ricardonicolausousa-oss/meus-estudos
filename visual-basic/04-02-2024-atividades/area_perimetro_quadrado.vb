Public Class area_perimetro_quadrado
    Dim area, perimetro, lado As Integer
    Private Sub btn_calcular_Click(sender As Object, e As EventArgs) Handles btn_calcular.Click
        lado = txt_lado.Text
        area = (lado * lado)
        perimetro = (lado * 4)
        lbl_area.Text = area
        lbl_perimetro.Text = perimetro
    End Sub

    Private Sub btn_limpar_Click(sender As Object, e As EventArgs) Handles btn_limpar.Click
        txt_lado.Clear()
        lbl_area.Text = ""
        lbl_perimetro.Text = ""
        txt_lado.Focus()
    End Sub
End Class