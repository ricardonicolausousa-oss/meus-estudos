<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class area_perimetro_quadrado
    Inherits System.Windows.Forms.Form

    'Descartar substituições de formulário para limpar a lista de componentes.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Exigido pelo Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'OBSERVAÇÃO: o procedimento a seguir é exigido pelo Windows Form Designer
    'Pode ser modificado usando o Windows Form Designer.  
    'Não o modifique usando o editor de códigos.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.Label4 = New System.Windows.Forms.Label()
        Me.txt_lado = New System.Windows.Forms.TextBox()
        Me.lbl_area = New System.Windows.Forms.Label()
        Me.lbl_perimetro = New System.Windows.Forms.Label()
        Me.btn_calcular = New System.Windows.Forms.Button()
        Me.Label5 = New System.Windows.Forms.Label()
        Me.btn_limpar = New System.Windows.Forms.Button()
        Me.SuspendLayout()
        '
        'Label1
        '
        Me.Label1.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label1.Location = New System.Drawing.Point(37, 23)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(374, 23)
        Me.Label1.TabIndex = 0
        Me.Label1.Text = "ÁREA E PERÍMETRO DO QUADRADO"
        '
        'Label2
        '
        Me.Label2.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label2.Location = New System.Drawing.Point(37, 74)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(230, 49)
        Me.Label2.TabIndex = 1
        Me.Label2.Text = "LADO DO QUADRADO:"
        '
        'Label3
        '
        Me.Label3.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label3.Location = New System.Drawing.Point(37, 123)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(230, 49)
        Me.Label3.TabIndex = 3
        Me.Label3.Text = "ÁREA DO QUADRADO:"
        '
        'Label4
        '
        Me.Label4.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label4.Location = New System.Drawing.Point(37, 172)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(295, 49)
        Me.Label4.TabIndex = 4
        Me.Label4.Text = "PERÍMETRO DO QUADRADO:"
        '
        'txt_lado
        '
        Me.txt_lado.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.txt_lado.Location = New System.Drawing.Point(338, 71)
        Me.txt_lado.Name = "txt_lado"
        Me.txt_lado.Size = New System.Drawing.Size(100, 30)
        Me.txt_lado.TabIndex = 6
        '
        'lbl_area
        '
        Me.lbl_area.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lbl_area.Location = New System.Drawing.Point(334, 123)
        Me.lbl_area.Name = "lbl_area"
        Me.lbl_area.Size = New System.Drawing.Size(104, 29)
        Me.lbl_area.TabIndex = 7
        '
        'lbl_perimetro
        '
        Me.lbl_perimetro.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lbl_perimetro.Location = New System.Drawing.Point(334, 172)
        Me.lbl_perimetro.Name = "lbl_perimetro"
        Me.lbl_perimetro.Size = New System.Drawing.Size(104, 29)
        Me.lbl_perimetro.TabIndex = 8
        '
        'btn_calcular
        '
        Me.btn_calcular.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btn_calcular.Location = New System.Drawing.Point(41, 224)
        Me.btn_calcular.Name = "btn_calcular"
        Me.btn_calcular.Size = New System.Drawing.Size(226, 60)
        Me.btn_calcular.TabIndex = 10
        Me.btn_calcular.Text = "CALCULAR"
        Me.btn_calcular.UseVisualStyleBackColor = True
        '
        'Label5
        '
        Me.Label5.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label5.Location = New System.Drawing.Point(348, 211)
        Me.Label5.Name = "Label5"
        Me.Label5.Size = New System.Drawing.Size(104, 29)
        Me.Label5.TabIndex = 11
        '
        'btn_limpar
        '
        Me.btn_limpar.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btn_limpar.Location = New System.Drawing.Point(338, 224)
        Me.btn_limpar.Name = "btn_limpar"
        Me.btn_limpar.Size = New System.Drawing.Size(226, 60)
        Me.btn_limpar.TabIndex = 12
        Me.btn_limpar.Text = "LIMPAR"
        Me.btn_limpar.UseVisualStyleBackColor = True
        '
        'area_perimetro_quadrado
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(8.0!, 16.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(800, 450)
        Me.Controls.Add(Me.btn_limpar)
        Me.Controls.Add(Me.Label5)
        Me.Controls.Add(Me.btn_calcular)
        Me.Controls.Add(Me.lbl_perimetro)
        Me.Controls.Add(Me.lbl_area)
        Me.Controls.Add(Me.txt_lado)
        Me.Controls.Add(Me.Label4)
        Me.Controls.Add(Me.Label3)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Label1)
        Me.Name = "area_perimetro_quadrado"
        Me.Text = "Form1"
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents Label1 As Label
    Friend WithEvents Label2 As Label
    Friend WithEvents Label3 As Label
    Friend WithEvents Label4 As Label
    Friend WithEvents txt_lado As TextBox
    Friend WithEvents lbl_area As Label
    Friend WithEvents lbl_perimetro As Label
    Friend WithEvents btn_calcular As Button
    Friend WithEvents Label5 As Label
    Friend WithEvents btn_limpar As Button
End Class
