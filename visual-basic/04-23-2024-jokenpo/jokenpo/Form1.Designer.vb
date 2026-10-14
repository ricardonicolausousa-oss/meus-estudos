<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class Form1
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
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(Form1))
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.cmb_suajogada = New System.Windows.Forms.ComboBox()
        Me.img_suajogada = New System.Windows.Forms.PictureBox()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.img_jogadainimiga = New System.Windows.Forms.PictureBox()
        Me.btn_jogar = New System.Windows.Forms.Button()
        Me.Label4 = New System.Windows.Forms.Label()
        Me.Label5 = New System.Windows.Forms.Label()
        Me.Label6 = New System.Windows.Forms.Label()
        Me.lbl_vitorias = New System.Windows.Forms.Label()
        Me.lbl_derrotas = New System.Windows.Forms.Label()
        Me.lbl_empates = New System.Windows.Forms.Label()
        CType(Me.img_suajogada, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.img_jogadainimiga, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'Label1
        '
        Me.Label1.Location = New System.Drawing.Point(52, 27)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(100, 23)
        Me.Label1.TabIndex = 0
        Me.Label1.Text = "JOKENPO"
        '
        'Label2
        '
        Me.Label2.Location = New System.Drawing.Point(52, 73)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(123, 23)
        Me.Label2.TabIndex = 1
        Me.Label2.Text = "SUA JOGADA:"
        '
        'cmb_suajogada
        '
        Me.cmb_suajogada.FormattingEnabled = True
        Me.cmb_suajogada.Items.AddRange(New Object() {"PEDRA", "PAPEL", "TESOURA"})
        Me.cmb_suajogada.Location = New System.Drawing.Point(181, 73)
        Me.cmb_suajogada.Name = "cmb_suajogada"
        Me.cmb_suajogada.Size = New System.Drawing.Size(131, 24)
        Me.cmb_suajogada.TabIndex = 2
        '
        'img_suajogada
        '
        Me.img_suajogada.Image = CType(resources.GetObject("img_suajogada.Image"), System.Drawing.Image)
        Me.img_suajogada.Location = New System.Drawing.Point(55, 118)
        Me.img_suajogada.Name = "img_suajogada"
        Me.img_suajogada.Size = New System.Drawing.Size(120, 107)
        Me.img_suajogada.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage
        Me.img_suajogada.TabIndex = 3
        Me.img_suajogada.TabStop = False
        '
        'Label3
        '
        Me.Label3.Location = New System.Drawing.Point(392, 73)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(123, 23)
        Me.Label3.TabIndex = 4
        Me.Label3.Text = "JOGADA INIMIGA:"
        '
        'img_jogadainimiga
        '
        Me.img_jogadainimiga.Image = CType(resources.GetObject("img_jogadainimiga.Image"), System.Drawing.Image)
        Me.img_jogadainimiga.InitialImage = CType(resources.GetObject("img_jogadainimiga.InitialImage"), System.Drawing.Image)
        Me.img_jogadainimiga.Location = New System.Drawing.Point(395, 118)
        Me.img_jogadainimiga.Name = "img_jogadainimiga"
        Me.img_jogadainimiga.Size = New System.Drawing.Size(120, 107)
        Me.img_jogadainimiga.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage
        Me.img_jogadainimiga.TabIndex = 5
        Me.img_jogadainimiga.TabStop = False
        '
        'btn_jogar
        '
        Me.btn_jogar.Location = New System.Drawing.Point(55, 337)
        Me.btn_jogar.Name = "btn_jogar"
        Me.btn_jogar.Size = New System.Drawing.Size(120, 38)
        Me.btn_jogar.TabIndex = 6
        Me.btn_jogar.Text = "JOGAR"
        Me.btn_jogar.UseVisualStyleBackColor = True
        '
        'Label4
        '
        Me.Label4.Location = New System.Drawing.Point(52, 244)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(123, 23)
        Me.Label4.TabIndex = 7
        Me.Label4.Text = "VITÓRIAS:"
        '
        'Label5
        '
        Me.Label5.Location = New System.Drawing.Point(52, 278)
        Me.Label5.Name = "Label5"
        Me.Label5.Size = New System.Drawing.Size(123, 23)
        Me.Label5.TabIndex = 8
        Me.Label5.Text = "DERROTAS"
        '
        'Label6
        '
        Me.Label6.Location = New System.Drawing.Point(52, 311)
        Me.Label6.Name = "Label6"
        Me.Label6.Size = New System.Drawing.Size(123, 23)
        Me.Label6.TabIndex = 9
        Me.Label6.Text = "EMPATES"
        '
        'lbl_vitorias
        '
        Me.lbl_vitorias.Location = New System.Drawing.Point(178, 244)
        Me.lbl_vitorias.Name = "lbl_vitorias"
        Me.lbl_vitorias.Size = New System.Drawing.Size(123, 23)
        Me.lbl_vitorias.TabIndex = 10
        '
        'lbl_derrotas
        '
        Me.lbl_derrotas.Location = New System.Drawing.Point(178, 278)
        Me.lbl_derrotas.Name = "lbl_derrotas"
        Me.lbl_derrotas.Size = New System.Drawing.Size(123, 23)
        Me.lbl_derrotas.TabIndex = 11
        '
        'lbl_empates
        '
        Me.lbl_empates.Location = New System.Drawing.Point(178, 311)
        Me.lbl_empates.Name = "lbl_empates"
        Me.lbl_empates.Size = New System.Drawing.Size(123, 23)
        Me.lbl_empates.TabIndex = 12
        '
        'Form1
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(8.0!, 16.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(800, 450)
        Me.Controls.Add(Me.lbl_empates)
        Me.Controls.Add(Me.lbl_derrotas)
        Me.Controls.Add(Me.lbl_vitorias)
        Me.Controls.Add(Me.Label6)
        Me.Controls.Add(Me.Label5)
        Me.Controls.Add(Me.Label4)
        Me.Controls.Add(Me.btn_jogar)
        Me.Controls.Add(Me.img_jogadainimiga)
        Me.Controls.Add(Me.Label3)
        Me.Controls.Add(Me.img_suajogada)
        Me.Controls.Add(Me.cmb_suajogada)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Label1)
        Me.Name = "Form1"
        Me.Text = "Form1"
        CType(Me.img_suajogada, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.img_jogadainimiga, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)

    End Sub

    Friend WithEvents Label1 As Label
    Friend WithEvents Label2 As Label
    Friend WithEvents cmb_suajogada As ComboBox
    Friend WithEvents img_suajogada As PictureBox
    Friend WithEvents Label3 As Label
    Friend WithEvents img_jogadainimiga As PictureBox
    Friend WithEvents btn_jogar As Button
    Friend WithEvents Label4 As Label
    Friend WithEvents Label5 As Label
    Friend WithEvents Label6 As Label
    Friend WithEvents lbl_vitorias As Label
    Friend WithEvents lbl_derrotas As Label
    Friend WithEvents lbl_empates As Label
End Class
