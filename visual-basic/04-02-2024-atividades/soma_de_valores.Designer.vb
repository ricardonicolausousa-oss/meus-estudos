<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class soma_de_valores
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
        Me.btn_somar = New System.Windows.Forms.Button()
        Me.txt_n1 = New System.Windows.Forms.TextBox()
        Me.txt_n2 = New System.Windows.Forms.TextBox()
        Me.lbl_res = New System.Windows.Forms.Label()
        Me.btn_limpar = New System.Windows.Forms.Button()
        Me.SuspendLayout()
        '
        'Label1
        '
        Me.Label1.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label1.Location = New System.Drawing.Point(40, 44)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(212, 23)
        Me.Label1.TabIndex = 0
        Me.Label1.Text = "SOMA DE VALORES"
        '
        'Label2
        '
        Me.Label2.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label2.Location = New System.Drawing.Point(40, 108)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(202, 39)
        Me.Label2.TabIndex = 1
        Me.Label2.Text = "PRIMEIRO VALOR:"
        '
        'Label3
        '
        Me.Label3.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label3.Location = New System.Drawing.Point(40, 147)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(202, 39)
        Me.Label3.TabIndex = 2
        Me.Label3.Text = "SEGUNDO VALOR:"
        '
        'Label4
        '
        Me.Label4.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.Label4.Location = New System.Drawing.Point(40, 186)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(202, 27)
        Me.Label4.TabIndex = 3
        Me.Label4.Text = "RESULTADO:"
        '
        'btn_somar
        '
        Me.btn_somar.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btn_somar.Location = New System.Drawing.Point(44, 228)
        Me.btn_somar.Name = "btn_somar"
        Me.btn_somar.Size = New System.Drawing.Size(198, 64)
        Me.btn_somar.TabIndex = 4
        Me.btn_somar.Text = "SOMAR"
        Me.btn_somar.UseVisualStyleBackColor = True
        '
        'txt_n1
        '
        Me.txt_n1.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.txt_n1.Location = New System.Drawing.Point(248, 105)
        Me.txt_n1.Name = "txt_n1"
        Me.txt_n1.Size = New System.Drawing.Size(110, 30)
        Me.txt_n1.TabIndex = 5
        Me.txt_n1.TextAlign = System.Windows.Forms.HorizontalAlignment.Center
        '
        'txt_n2
        '
        Me.txt_n2.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.txt_n2.Location = New System.Drawing.Point(248, 147)
        Me.txt_n2.Name = "txt_n2"
        Me.txt_n2.Size = New System.Drawing.Size(110, 30)
        Me.txt_n2.TabIndex = 6
        Me.txt_n2.TextAlign = System.Windows.Forms.HorizontalAlignment.Center
        '
        'lbl_res
        '
        Me.lbl_res.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Italic, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lbl_res.Location = New System.Drawing.Point(244, 186)
        Me.lbl_res.Name = "lbl_res"
        Me.lbl_res.Size = New System.Drawing.Size(114, 27)
        Me.lbl_res.TabIndex = 7
        Me.lbl_res.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'btn_limpar
        '
        Me.btn_limpar.Font = New System.Drawing.Font("Arial", 12.0!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.btn_limpar.Location = New System.Drawing.Point(248, 228)
        Me.btn_limpar.Name = "btn_limpar"
        Me.btn_limpar.Size = New System.Drawing.Size(198, 64)
        Me.btn_limpar.TabIndex = 8
        Me.btn_limpar.Text = "LIMPAR"
        Me.btn_limpar.UseVisualStyleBackColor = True
        '
        'soma_de_valores
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(8.0!, 16.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(800, 450)
        Me.Controls.Add(Me.btn_limpar)
        Me.Controls.Add(Me.lbl_res)
        Me.Controls.Add(Me.txt_n2)
        Me.Controls.Add(Me.txt_n1)
        Me.Controls.Add(Me.btn_somar)
        Me.Controls.Add(Me.Label4)
        Me.Controls.Add(Me.Label3)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Label1)
        Me.Name = "soma_de_valores"
        Me.Text = "Form1"
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents Label1 As Label
    Friend WithEvents Label2 As Label
    Friend WithEvents Label3 As Label
    Friend WithEvents Label4 As Label
    Friend WithEvents btn_somar As Button
    Friend WithEvents txt_n1 As TextBox
    Friend WithEvents txt_n2 As TextBox
    Friend WithEvents lbl_res As Label
    Friend WithEvents btn_limpar As Button
End Class
