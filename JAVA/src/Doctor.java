
import com.mysql.cj.jdbc.result.ResultSetMetaData;
import java.sql.Statement;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Vector;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */

/**
 *
 * @author IFA
 */
public class Doctor extends javax.swing.JFrame {

    /**
     * Creates new form Patient
     */
    public Doctor() {
       initComponents();
       Connect();
       doctorTable();

    }
    
    Connection conn;
    PreparedStatement pst;
    ResultSet rs;
    public void Connect(){
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            conn = (Connection) DriverManager.getConnection("jdbc:mysql://localhost:3306/general_harar_hospital","root","");
        } catch (Exception ex) {
            System.out.println(ex);
        }
    }
    
    public void doctorTable()
    {
        try {
            pst=conn.prepareStatement("select *from doctor" );
            
             rs=pst.executeQuery();
                ResultSetMetaData rsm=(ResultSetMetaData) rs.getMetaData();
                int c;
                c=rsm.getColumnCount();
                DefaultTableModel df=(DefaultTableModel)jTable1.getModel();
                df.setRowCount(0);
                
                while(rs.next())
                {
                    Vector v2=new Vector();
                    
                    for(int i=1; i<c; i++)
                    {
                        v2.add(rs.getString("Doctor_Id"));
                        v2.add(rs.getString("Full_name"));
                        v2.add(rs.getString("Phone_no"));
                        v2.add(rs.getString("Specialization"));
                        v2.add(rs.getString("Qualification"));
                        v2.add(rs.getString("Gender"));
                        v2.add(rs.getString("Roomno"));
                        
                    }
                    df.addRow(v2);
                }
        
        } catch (SQLException ex) {
            Logger.getLogger(Doctor.class.getName()).log(Level.SEVERE, null, ex);
        }
               
    }
   
    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        jPanel2 = new javax.swing.JPanel();
        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        jLabel5 = new javax.swing.JLabel();
        jLabel6 = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();
        didtxt = new javax.swing.JTextField();
        fnametxt = new javax.swing.JTextField();
        pnotxt = new javax.swing.JTextField();
        spztxt = new javax.swing.JTextField();
        gendercmb = new javax.swing.JComboBox<>();
        jLabel8 = new javax.swing.JLabel();
        qultxt = new javax.swing.JTextField();
        roomnotxt = new javax.swing.JSpinner();
        jLabel1 = new javax.swing.JLabel();
        jScrollPane2 = new javax.swing.JScrollPane();
        jTable1 = new javax.swing.JTable();
        addbutn = new javax.swing.JButton();
        deletebtn = new javax.swing.JButton();
        searchbtn = new javax.swing.JButton();
        updatebtn = new javax.swing.JButton();
        exitbtn = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jPanel1.setBackground(new java.awt.Color(0, 102, 102));

        jPanel2.setBackground(new java.awt.Color(0, 204, 255));
        jPanel2.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Doctor Registration", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Segoe UI", 1, 12), new java.awt.Color(255, 255, 255))); // NOI18N

        jLabel2.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        jLabel2.setText("Doctor_Id");
        jLabel2.setPreferredSize(new java.awt.Dimension(120, 40));

        jLabel3.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        jLabel3.setText("Full_Name");
        jLabel3.setPreferredSize(new java.awt.Dimension(120, 40));

        jLabel4.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        jLabel4.setText("Phone_no");
        jLabel4.setPreferredSize(new java.awt.Dimension(120, 40));

        jLabel5.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        jLabel5.setText("Specialization");
        jLabel5.setPreferredSize(new java.awt.Dimension(120, 40));

        jLabel6.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        jLabel6.setText("Gender");
        jLabel6.setPreferredSize(new java.awt.Dimension(120, 40));

        jLabel7.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        jLabel7.setText("Room_no");
        jLabel7.setPreferredSize(new java.awt.Dimension(120, 40));

        didtxt.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        didtxt.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                didtxtActionPerformed(evt);
            }
        });

        fnametxt.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        fnametxt.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                fnametxtActionPerformed(evt);
            }
        });

        pnotxt.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        pnotxt.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                pnotxtActionPerformed(evt);
            }
        });

        spztxt.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        spztxt.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                spztxtActionPerformed(evt);
            }
        });

        gendercmb.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        gendercmb.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Female", "Male" }));

        jLabel8.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        jLabel8.setText("Qualification");
        jLabel8.setPreferredSize(new java.awt.Dimension(120, 40));

        qultxt.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N
        qultxt.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                qultxtActionPerformed(evt);
            }
        });

        roomnotxt.setFont(new java.awt.Font("Segoe UI", 1, 14)); // NOI18N

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jLabel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel3, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel4, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel6, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel5, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel8, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel7, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(40, 40, 40)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(qultxt, javax.swing.GroupLayout.PREFERRED_SIZE, 157, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(spztxt, javax.swing.GroupLayout.PREFERRED_SIZE, 157, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(pnotxt, javax.swing.GroupLayout.PREFERRED_SIZE, 157, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(fnametxt, javax.swing.GroupLayout.PREFERRED_SIZE, 157, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(didtxt, javax.swing.GroupLayout.PREFERRED_SIZE, 157, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING, false)
                        .addComponent(roomnotxt, javax.swing.GroupLayout.Alignment.LEADING)
                        .addComponent(gendercmb, javax.swing.GroupLayout.Alignment.LEADING, 0, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)))
                .addContainerGap(65, Short.MAX_VALUE))
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addGap(16, 16, 16)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(didtxt, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel3, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(fnametxt, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel4, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(pnotxt, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(spztxt, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel5, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel8, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(qultxt, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel6, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(gendercmb, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel7, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(roomnotxt, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap(54, Short.MAX_VALUE))
        );

        jLabel1.setBackground(new java.awt.Color(255, 255, 0));
        jLabel1.setFont(new java.awt.Font("Segoe UI", 3, 24)); // NOI18N
        jLabel1.setForeground(new java.awt.Color(255, 255, 51));
        jLabel1.setText("Doctor Registration");

        jTable1.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null, null, null, null, null},
                {null, null, null, null, null, null, null},
                {null, null, null, null, null, null, null},
                {null, null, null, null, null, null, null}
            },
            new String [] {
                "Doctor_Id", "Full_Name", "Phone_no", "Specialization", "Qualification", "Gender", "Room_no"
            }
        ) {
            Class[] types = new Class [] {
                java.lang.Integer.class, java.lang.String.class, java.lang.Integer.class, java.lang.String.class, java.lang.String.class, java.lang.String.class, java.lang.Integer.class
            };

            public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
            }
        });
        jTable1.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jTable1MouseClicked(evt);
            }
        });
        jScrollPane2.setViewportView(jTable1);

        addbutn.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        addbutn.setText("Add");
        addbutn.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                addbutnActionPerformed(evt);
            }
        });

        deletebtn.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        deletebtn.setText("Delete");
        deletebtn.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                deletebtnActionPerformed(evt);
            }
        });

        searchbtn.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        searchbtn.setText("Search");
        searchbtn.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                searchbtnActionPerformed(evt);
            }
        });

        updatebtn.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        updatebtn.setText("Update");
        updatebtn.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                updatebtnActionPerformed(evt);
            }
        });

        exitbtn.setFont(new java.awt.Font("Segoe UI", 1, 18)); // NOI18N
        exitbtn.setText("Exit");
        exitbtn.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                exitbtnActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(14, 14, 14)
                        .addComponent(jPanel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(18, 18, 18)
                        .addComponent(jScrollPane2, javax.swing.GroupLayout.DEFAULT_SIZE, 533, Short.MAX_VALUE))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(jPanel1Layout.createSequentialGroup()
                                .addGap(60, 60, 60)
                                .addComponent(addbutn)
                                .addGap(38, 38, 38)
                                .addComponent(deletebtn)
                                .addGap(33, 33, 33)
                                .addComponent(updatebtn)
                                .addGap(33, 33, 33)
                                .addComponent(searchbtn)
                                .addGap(42, 42, 42)
                                .addComponent(exitbtn))
                            .addGroup(jPanel1Layout.createSequentialGroup()
                                .addGap(306, 306, 306)
                                .addComponent(jLabel1, javax.swing.GroupLayout.PREFERRED_SIZE, 240, javax.swing.GroupLayout.PREFERRED_SIZE)))
                        .addGap(0, 0, Short.MAX_VALUE)))
                .addContainerGap())
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jLabel1)
                .addGap(18, 18, 18)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addComponent(jPanel2, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(jScrollPane2))
                        .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                        .addGap(507, 507, 507)
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(addbutn)
                            .addComponent(deletebtn)
                            .addComponent(updatebtn)
                            .addComponent(searchbtn)
                            .addComponent(exitbtn))
                        .addGap(32, 32, 32))))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addContainerGap())
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void didtxtActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_didtxtActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_didtxtActionPerformed

    private void fnametxtActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_fnametxtActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_fnametxtActionPerformed

    private void pnotxtActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_pnotxtActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_pnotxtActionPerformed

    private void spztxtActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_spztxtActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_spztxtActionPerformed

    private void searchbtnActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_searchbtnActionPerformed
        try {
            // TODO add your handling code here:
            
            pst = conn.prepareStatement("select * from doctor where doctor_id = ?");
             pst.setString(1, didtxt.getText());
            rs = pst.executeQuery();
            
            if(rs.next()){
                        fnametxt.setText(rs.getString("Full_name"));
                        pnotxt.setText(rs.getString("Phone_no"));
                        spztxt.setText(rs.getString("Specialization"));
                        qultxt.setText(rs.getString("Qualification"));
                        gendercmb.getEditor().setItem(rs.getString("Gender"));
                        roomnotxt.setValue(rs.getString("Roomno"));
                    }
            else{
                JOptionPane.showMessageDialog(this, "Doctor not found ");
            }
        } catch (SQLException ex) {
            Logger.getLogger(Doctor.class.getName()).log(Level.SEVERE, null, ex);
        }
         
    }//GEN-LAST:event_searchbtnActionPerformed

    private void addbutnActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_addbutnActionPerformed

String doctorid=didtxt.getText();
String fullname=fnametxt.getText();
String phoneno=pnotxt.getText();
String Specialization=spztxt.getText();
String Qualification=qultxt.getText();
String gender=gendercmb.getSelectedItem().toString();
String roomno=roomnotxt.getValue().toString();


        try {
            
              if (didtxt.getText().equals("")) {
                JOptionPane.showMessageDialog( this, "Please enter doctor id","Error", JOptionPane.ERROR_MESSAGE);
                return;

            }
                if (fnametxt.getText().equals("")) {
                JOptionPane.showMessageDialog( this, "Please enter Full name ","Error", JOptionPane.ERROR_MESSAGE);
                return;

            }
                  if (pnotxt.getText().equals("")) {
                JOptionPane.showMessageDialog( this, "Please enter phone numbers","Error", JOptionPane.ERROR_MESSAGE);
                return;

            }
                    if (spztxt.getText().equals("")) {
                JOptionPane.showMessageDialog( this, "Please enter Specialization of doctor","Error", JOptionPane.ERROR_MESSAGE);
                return;

            }
                     if (qultxt.getText().equals("")) {
                JOptionPane.showMessageDialog( this, "Please enter Qualification of doctor","Error", JOptionPane.ERROR_MESSAGE);
                return;

            }
                     if (gendercmb.getSelectedItem().equals("")) {
                JOptionPane.showMessageDialog( this, "Please select gender","Error", JOptionPane.ERROR_MESSAGE);
                return;
            }
                        if (roomnotxt.getValue().equals("")) {
                JOptionPane.showMessageDialog( this, "Please enter doctor roomno","Error", JOptionPane.ERROR_MESSAGE);
                return;

            }
            
            
             Statement stmt;
       stmt= conn.createStatement();
       
            // check for if Doctor is registered or not by doctor id
       String sql1="Select Doctor_Id from doctor where Doctor_Id= '" + didtxt.getText() + "'";
      rs=stmt.executeQuery(sql1);
      if(rs.next()){
        JOptionPane.showMessageDialog( this, "Doctor ID already exists","Error", JOptionPane.ERROR_MESSAGE);
        didtxt.setText("");
        didtxt.requestFocus();
       return;
      }

            
            pst=conn.prepareStatement("insert into doctor(Doctor_Id,Full_name,Phone_no,Specialization,Qualification,Gender,roomno) values(?,?,?,?,?,?,?)");
            
            pst.setString(1, doctorid);
            pst.setString(2, fullname);
            pst.setString(3, phoneno);
            pst.setString(4, Specialization);            
            pst.setString(5, Qualification);
            pst.setString(6, gender);
            pst.setString(7, roomno);
            pst.executeUpdate();
            
                JOptionPane.showMessageDialog(this, "doctor insert successfully");

            doctorTable();

                        
            didtxt.setText("");
            fnametxt.setText("");
            pnotxt.setText("");
            spztxt.setText("");
            qultxt.setText("");
            gendercmb.setSelectedIndex(-1);
            roomnotxt.setValue(0);
            didtxt.requestFocus();
            // TODO add your handling code here:
        } catch (SQLException ex) {
            Logger.getLogger(Doctor.class.getName()).log(Level.SEVERE, null, ex);
        }
    }//GEN-LAST:event_addbutnActionPerformed

    private void jTable1MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jTable1MouseClicked

        
                    DefaultTableModel d1=(DefaultTableModel)jTable1.getModel();
                    int SelectIndex=jTable1.getSelectedRow();
                    didtxt.setText(d1.getValueAt(SelectIndex, 0).toString());
                    fnametxt.setText(d1.getValueAt(SelectIndex, 1).toString());
                    pnotxt.setText(d1.getValueAt(SelectIndex, 2).toString());
                    spztxt.setText(d1.getValueAt(SelectIndex, 3).toString());
                    qultxt.setText(d1.getValueAt(SelectIndex, 4).toString());
                    gendercmb.setSelectedItem(d1.getValueAt(SelectIndex,5).toString());
                    roomnotxt.setValue(d1.getValueAt(SelectIndex, 6).toString());
                    addbutn.setEnabled(false);
        // TODO add your handling code here:
    }//GEN-LAST:event_jTable1MouseClicked

    private void updatebtnActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_updatebtnActionPerformed

String fullname=fnametxt.getText();
String phoneno=pnotxt.getText();
String Specialization=spztxt.getText();
String Qualification=qultxt.getText();
String gender=gendercmb.getSelectedItem().toString();
String roomno=roomnotxt.getValue().toString();
String doctorid=didtxt.getText();

            try{
            pst=conn.prepareStatement("update doctor set Full_name=?,Phone_no=?,Specialization=?,Qualification=?,Gender=?,roomno=? where doctor_id=?");
            
            pst.setString(1, fullname);
            pst.setString(2, phoneno);
            pst.setString(3, Specialization);
            pst.setString(4, Qualification);
            pst.setString(5, gender);
            pst.setString(6, roomno);
            pst.setString(7, doctorid);

            pst.executeUpdate();
            
            JOptionPane.showMessageDialog(this, "doctor Updated successfully");

              
              addbutn.setEnabled(true);
                        
            didtxt.setText("");
            fnametxt.setText("");
            pnotxt.setText("");
            spztxt.setText("");
            qultxt.setText("");
            gendercmb.setSelectedIndex(-1);
            roomnotxt.setValue(0);
            didtxt.requestFocus();
            doctorTable();
            // TODO add your handling code here:
        } catch (SQLException ex) {
            Logger.getLogger(Doctor.class.getName()).log(Level.SEVERE, null, ex);
        
        }
        


        // TODO add your handling code here:
    }//GEN-LAST:event_updatebtnActionPerformed

    private void deletebtnActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_deletebtnActionPerformed




String doctorid=didtxt.getText();

            try{
            pst=conn.prepareStatement("delete from doctor where Doctor_Id=?");
            
            pst.setString(1, doctorid);

            pst.executeUpdate();
            
                JOptionPane.showMessageDialog(this, "doctor deleted successfully");

              doctorTable();
              addbutn.setEnabled(true);
                        
            didtxt.setText("");
            fnametxt.setText("");
            pnotxt.setText("");
            spztxt.setText("");
            qultxt.setText("");
            gendercmb.setSelectedIndex(-1);
            roomnotxt.setValue(0);
            didtxt.requestFocus();
            // TODO add your handling code here:
        } catch (SQLException ex) {
            Logger.getLogger(Doctor.class.getName()).log(Level.SEVERE, null, ex);
        
        }
        
        // TODO add your handling code here:
    }//GEN-LAST:event_deletebtnActionPerformed

    private void exitbtnActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_exitbtnActionPerformed

this.setVisible(false);

        // TODO add your handling code here:
    }//GEN-LAST:event_exitbtnActionPerformed

    private void qultxtActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_qultxtActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_qultxtActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Patient.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Patient.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Patient.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Patient.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Doctor().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton addbutn;
    private javax.swing.JButton deletebtn;
    private javax.swing.JTextField didtxt;
    private javax.swing.JButton exitbtn;
    private javax.swing.JTextField fnametxt;
    private javax.swing.JComboBox<String> gendercmb;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel8;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JTable jTable1;
    private javax.swing.JTextField pnotxt;
    private javax.swing.JTextField qultxt;
    private javax.swing.JSpinner roomnotxt;
    private javax.swing.JButton searchbtn;
    private javax.swing.JTextField spztxt;
    private javax.swing.JButton updatebtn;
    // End of variables declaration//GEN-END:variables
}
